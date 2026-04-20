<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Exceptions\Common\AppException;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Model\CrmPermission\CrmUser;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrmUserDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmUser::class);
    }

    /**
     * 批量取消执业证关联
     * @param $qualificationNo
     * @param $salesNoArr
     * @return mixed
     */
    public function batchCancelQualificationsRelationUser($qualificationNo, $salesNoArr)
    {
        return $this->getModel()->newQuery()
            ->useSalesQualificationNoQuery($qualificationNo)
            ->inSalesNoQuery($salesNoArr)
            ->update(['use_sales_qualification_no' => '']);
    }

    /**
     * 通过编号获取id
     * @param $userNo
     * @return mixed
     */
    public function getIdListByUserNo($userNo)
    {
        $query = $this->newBuilder();

        return $query
            ->select('id')
            ->userNoQuery($userNo)
            ->pluck('id')
            ->toArray();
    }

    /**
     * 获取分页列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getPageList(array $params = [], array $columns = [], array $relations = [])
    {
        $params['sort_by_id'] = $params['sort_by_id'] ?? 'desc';

        return parent::getPageList($params, $columns, $relations);
    }

    /**
     * 获取列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getList(array $params = [], array $columns = [], array $relations = [])
    {
        $params['sort_by_id'] = $params['sort_by_id'] ?? 'desc';

        $query = $this->doQuery($params, $columns, $relations);

        if (filled($pageSize = array_get($params, 'page_size')))
        {
            $query->limit($pageSize);
        }

        return $query->get();
    }

    /**
     * 根据账号获取员工信息
     * @param string $account
     * @param array $columns
     * @return mixed
     * @throws AppException
     */
    public function findByAccountOrFail(string $account,array $columns = [])
    {
        $query = $this->newBuilder()->select($this->getSelectColumns($columns))->accountQuery($account);

        $result = $query->first();

        if (blank($result))
        {
            throw new AppException(110006);
        }

        return $result;
    }

    /**
     * 通过销售id获取销售列表
     *
     * @param array $idArr
     * @param array $columns
     * @return Collection
     */
    public function getEffectedSalesListByIdArr(array $idArr, array $columns = [])
    {
        return $this->getModel()
            ->newQuery()
            ->select($this->getSelectColumns($columns))
            ->idArrQuery($idArr)
            ->accountStatusQuery(AccountStatus::ENABLE)
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * 通过销售id获取销售列表
     *
     * @param array $idArr
     * @param null $isEmployee
     * @param array $columns
     * @return Collection
     */
    public function getSalesListByIdArr(array $idArr, array $columns = [])
    {
        $model = $this->getModel();

        $query = $model->select($this->getSelectColumns($columns));

        $query->idArrQuery($idArr);

        $query->orderBy('id', 'desc');

        return $query->get();
    }

    /**
     * 验证账号是否失效
     * @param int $userId
     * @return int
     * @throws AppException
     */
    public function countByIdAndCloseAtIsZero(int $userId)
    {
        $params = [
            'id'       => $userId,
            'close_at' => 0,
        ];

        return $this->doQuery($params)->count();
    }

    /**
     * 通过 job_sn 获取账户列表
     * @param array $jobSn
     * @param array $columns
     * @param array $relations
     * @param array $params
     * @return Builder|Collection
     * @throws AppException
     */
    public function getListByJobSn(array $jobSn, array $columns = [], array $relations = [], array $params = [])
    {
        $params['job_sn'] = $jobSn;

        return $this->doQuery($params, $columns, $relations)
            ->get();
    }

    /**
     * 通过 job_sn 模糊匹配账户列表
     * @param string $jobSn
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getListByJobSnLike(string $jobSn, array $columns = [], array $relations = [])
    {
        $params = [
            'job_sn_like' => $jobSn,
        ];

        return $this->doQuery($params, $columns, $relations)->get();
    }

    /**
     * 通过 id 数组获取列表
     * @param array $idArr
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getListByIdArr(array $idArr, array $columns = [], array $relations = [])
    {
        if (blank($idArr))
        {
            throw new AppException(100003);
        }

        $params['id'] = $idArr;

        return $this->getList($params, $columns, $relations);
    }

    /**
     * 通过工号找账户
     * @param string $jobSn
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object|null
     * @throws AppException
     */
    public function findByJobSnOrFailed(string $jobSn, array $columns = [], array $relations = [])
    {
        $params = [
            'job_sn' => $jobSn,
        ];

        return $this->doQuery($params, $columns, $relations)->first();
    }

    /**
     * 构建查询前对$params进行操作
     * @param Builder $query
     * @param array $params
     * @return array
     * @throws AppException
     * @author leo 2021/12/13
     */
    protected function beforeBuildFiled(Builder $query, array $params): array
    {
        // 是否显示离职员工
        $isShowDimission = array_pull($params, 'is_show_dimission');
        if (
            filled($isShowDimission) && $isShowDimission == YesOrNo::NO
        )
        {
            $params['account_status'] = AccountStatus::ENABLE;
        }

        // 角色编号转id
        if (filled($roleNo = (array)array_pull($params, 'role_no', [])))
        {
            $params['role_id'] = CrmAdmRoleDao::getInstance()->getByMainNo($roleNo, ['id'])
                ->pluck('id')->toArray() ?: [-1];
        }

        /* 用户加入团队查询结束 */

        $params['team_bind_user_params'] = $teamBindUserParams ?? [];

        return $params;
    }


    /**
     * 通过id获取多个
     * @param $id
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getUserListById(int|array $id): Collection|array
    {
        $params = [
            'id' => $id,
        ];

        return $this->doQuery($params, ['user_no', 'id'])
            ->get();
    }

    /**
     * 通过唯一编码查询
     * @param string $userNo
     * @param array $columns
     * @return mixed
     */
    public function findByUserNo(string $userNo, array $columns = [])
    {
        return $this->newBuilder()
            ->select($this->getSelectColumns($columns))
            ->userNoQuery($userNo)
            ->first();
    }

    /**
     * 根据部门编号
     * @param string $departmentNo
     * @return mixed
     */
    public function findByDepartmentNo(string $departmentNo)
    {
        return $this->newBuilder()
            ->accountStatusQuery(AccountStatus::ENABLE)
            ->departmentNoQuery($departmentNo)
            ->get();
    }

    /**
     * 获取所有非离职状态的直接下属销售用户
     *
     * @param $ascriptionUserNo
     * @return mixed
     */
    public function getNotDimissionAscriptionUsers($ascriptionUserNo)
    {
        return $this->getModel()
            ->ascriptionUserNoQuery($ascriptionUserNo)
            ->notDimissionQuery()
            ->get();
    }

    /**
     * 通过编号获取销售no
     * @param $id
     * @return mixed
     */
    public function getSalesNoListById($id)
    {
        $query = $this->newBuilder();

        return $query
            ->select('sales_no')
            ->idQuery($id)
            ->pluck('sales_no')
            ->toArray();
    }

    /**
     * 通过执业证id更新数据
     * @param string $useSalesQualificationNo
     * @param array $attributes
     * @return int
     * @throws AppException
     */
    public function updateAttributeByUseSalesQualificationNo(string $useSalesQualificationNo, array $attributes)
    {
        $params = [
            'use_sales_qualification_no' => $useSalesQualificationNo,
        ];

        return $this->updateByParams($params, $attributes);
    }

    /**
     * 通过编号获取工号
     * @param $userNo
     * @return mixed
     */
    public function getJobSnListByUserNo($userNo)
    {
        $query = $this->newBuilder();

        return $query
            ->select('job_sn')
            ->userNoQuery($userNo)
            ->pluck('job_sn')
            ->toArray();
    }

    /**
     * 通过公司id获取管理员账户列表
     * @param int $companyId
     * @param array $params
     * @param array $columns
     * @param array $releation
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getListByCompanyId(int $companyId, array $params = [], array $columns = [], array $releation = [])
    {
        if (
            !is_numeric($companyId)
            || $companyId < 1
        ) {
            throw new AppException(100003);
        }

        // 默认查询参数
        if (blank($columns))
        {
            $columns = ['id', 'job_sn', 'real_name'];
        }

        $params['company_id'] = $companyId;

        return $this->getList($params, $columns, $releation);
    }

    /**
     * 通过销售编码查询
     * @param string $salesNo
     * @param array $columns
     * @param array $relations
     * @return Builder|Model|object|null
     */
    public function findBySalesNo(string $salesNo, array $columns = [], array $relations = [])
    {
        $query = $this->newBuilder();

        $query->select($this->getSelectColumns($columns));
        $query->salesNoQuery($salesNo);

        if (filled($relations))
        {
            $query->with($relations);
        }

        return $query->first();
    }

    /**
     * 通过编号获取销售编号
     * @param $userNo
     * @return mixed
     */
    public function getSalesNoListByUserNo($userNo)
    {
        $query = $this->newBuilder();

        return $query
            ->select('sales_no')
            ->userNoQuery($userNo)
            ->pluck('sales_no')
            ->toArray();
    }

    /**
     * 根据工号更新数据
     * @param $jobSn
     * @param $data
     * @return int
     * @throws AppException
     */
    public function updateByJobNo($jobSn, $data): int
    {
        return $this->doQuery(['job_sn' => $jobSn])->update($data);
    }

    /**
     * 批量更新在职员工角色
     * @param $userNos
     * @param array $data
     * @return mixed
     */
    public function batchSetUserRole($userNos, array $data)
    {
        return $this->getModel()->newQuery()->userNoQuery($userNos)->update($data);
    }

    /**
     * 根据账号获取员工信息
     * @param string $mobile
     * @param array $columns
     * @return mixed
     * @throws AppException
     */
    public function findByMobile(string $mobile, array $columns = [])
    {
        $query = $this->newBuilder()->select($this->getSelectColumns($columns))->mobileQuery($mobile);

        return $query->first();
    }

    /**
     * 根据账号获取员工信息
     * @param string $account
     * @param array $columns
     * @return mixed
     * @throws AppException
     */
    public function findByAccount(string $account,array $columns = [])
    {
        $query = $this->newBuilder()->select($this->getSelectColumns($columns))->accountQuery($account);

        return $query->first();
    }
}
