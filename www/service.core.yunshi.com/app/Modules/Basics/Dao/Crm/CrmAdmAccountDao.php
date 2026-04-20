<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Exceptions\Common\AppException;
use App\Modules\Basics\Model\CrmPermission\CrmAdmAccount;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrmAdmAccountDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmAdmAccount::class);
    }

    /**
     * 获取分页列表
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
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
     * 通过 job_sn 获取账户列表
     * @param array $jobSn
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getListByJobSn(array $jobSn, array $columns = [], array $relations = [])
    {
        if (blank($jobSn))
        {
            throw new AppException(100003);
        }

        $params['job_sn_in'] = $jobSn;

        return $this->getList($params, $columns, $relations);
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
        if (blank($jobSn))
        {
            throw new AppException(100003);
        }

        $params['job_sn_like'] = $jobSn;

        return $this->getList($params, $columns, $relations);
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

        $params['ids'] = $idArr;

        return $this->getList($params, $columns, $relations);
    }

    /**
     * 获取非经济公司员工
     * @param array $params
     * @param array $columns
     * @return Builder[]|Collection
     * @throws AppException
     * @author leo 2021/12/20
     */
    public function getNoBrokerCompanyEmployee(array $params = [], array $columns = [])
    {
        $params['is_broker_company'] = YesOrNo::NO;

        return $this->doQuery($params, $columns)
            ->withoutGlobalScope('is_broker_company')
            ->get();
    }

    /**
     * 通过公司id获取管理员账户列表
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
     * job_sn 查询
     *
     * @param string $jobSn
     * @return mixed
     */
    public function findByJobSn(string $jobSn)
    {
        return $this->newBuilder()->jobSnQuery($jobSn)->first();
    }

    /**
     * 通过工号找账户
     */
    public function findByJobSnOrFailed($jobSn, array $columns = [], array $relations = [])
    {
        if (empty($jobSn))
        {
            throw new AppException(100003);
        }

        $model = $this->getModel();

        $query = $model->select($this->getSelectColumns($columns));

        $query->JobSnQuery($jobSn);

        $res = $query->first();

        if (!$res)
        {
            throw new AppException(110006);
        }

        if (filled($relations))
        {
            $res->load($relations);
        }

        return $res;
    }

    /**
     * 根据用户编码获取列表
     * @param array $accountNoArr
     * @param array $columns
     * @return Collection
     */
    public function getListByAccountNoArr(array $accountNoArr, array $columns = [])
    {
        return $this->newBuilder()
            ->select($this->getSelectColumns($columns))
            ->accountNoArrQuery($accountNoArr)
            ->get();
    }
}
