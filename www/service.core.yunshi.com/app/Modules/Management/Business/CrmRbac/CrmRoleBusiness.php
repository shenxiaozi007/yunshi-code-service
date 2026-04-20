<?php

namespace App\Modules\Management\Business\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Management\CrmUserException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Common\OrderBy;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleBindRelationDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleBindReportRelationDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleDao;
use App\Modules\Basics\Dao\Crm\CrmUserDao;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRole;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRoleBindRelation;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRoleBindReportRelation;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class CrmRoleBusiness extends BaseBusiness
{
    /**
     * CrmRoleBusiness constructor.
     */
    public function __construct(
        protected CrmAdmRoleDao $crmAdmRoleDao,
        protected CrmUserDao $crmUserDao,
        protected CrmAdmRoleBindRelationDao $crmAdmRoleBindRelationDao,
    ) {}

    /**
     * 存储
     * @param array $data
     * @return Model
     * @throws ValidationException
     */
    public function store(array $data)
    {
        validator(
            $data, [
                'name'  => [
                    'required',
                    'string',
                    Rule::unique($this->crmAdmRoleDao->getTableName())->whereNull('deleted_at'),
                ],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        $data['role_no'] = snow_flake_id();

        return $this->crmAdmRoleDao->store($data);
    }

    /**
     * 复制角色
     * @param string $roleNo
     * @param array $params
     * @param array $adminInfo
     * @throws AppException
     * @throws \Throwable
     */
    public function copy(string $roleNo, array $params, array $adminInfo)
    {
        $data = validator(
            $params, [
                'name'  => [
                    'required',
                    'string',
                    Rule::unique($this->crmAdmRoleDao->getTableName())->whereNull('deleted_at'),
                ],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        /** @var CrmAdmRole $oldRole */
        $oldRole    = $this->crmAdmRoleDao->findByMainNoOrFail($roleNo);

        $data['role_no']                = snow_flake_id();
        $data['relevance_position_id']  = $oldRole->relevance_position_id;
        $data['add_admin_id']           = array_get($adminInfo, 'id', 0);
        $data['add_admin_name']         = array_get($adminInfo, 'real_name', '');

        app('db')->transaction(function () use ($oldRole, $data, $adminInfo)
        {
            /** @var CrmAdmRole $roleInfo */
            $roleInfo   = $this->crmAdmRoleDao->store($data);

            // 角色绑定权限
            $roleBindRelations      = $this->crmAdmRoleBindRelationDao->getByRoleId($oldRole->id);
            $roleBindRelationData   = [];
            /** @var CrmAdmRoleBindRelation $roleBindRelation */
            foreach ($roleBindRelations as $roleBindRelation)
            {
                $roleBindRelationData[] = [
                    'role_id'           => $roleInfo->id,
                    'permission_id'     => $roleBindRelation->permission_id,
                    'encryption_option' => $roleBindRelation->encryption_option,
                    'add_admin_id'      => array_get($adminInfo, 'id', 0),
                    'add_admin_name'    => array_get($adminInfo, 'real_name', ''),

                    'add_time'          => get_now(),
                    'last_update_time'  => get_now(),
                    'updated_at'        => Carbon::now(),
                    'created_at'        => Carbon::now(),
                ];
            }

            if (filled($roleBindRelationData))
            {
                $this->crmAdmRoleBindRelationDao->insertMulti($roleBindRelationData);
            }

            //todo 后续加
            // // 角色绑定数据权限
            // $roleBindReportRelations      = $this->crmAdmRoleBindReportRelationDao->getByRoleId($oldRole->id);
            // $roleBindReportRelationData   = [];
            // /** @var CrmAdmRoleBindReportRelation $roleBindReportRelation */
            // foreach ($roleBindReportRelations as $roleBindReportRelation)
            // {
            //     $roleBindReportRelationData[] = [
            //         'role_id'               => $roleInfo->id,
            //         'report_permission_id'  => $roleBindReportRelation->report_permission_id,
            //         'add_admin_id'          => array_get($adminInfo, 'id', 0),
            //         'add_admin_name'        => array_get($adminInfo, 'real_name', ''),

            //         'add_time'              => get_now(),
            //         'last_update_time'      => get_now(),
            //         'updated_at'            => Carbon::now(),
            //         'created_at'            => Carbon::now(),
            //     ];
            // }

            // if (filled($roleBindReportRelationData))
            // {
            //     $this->crmAdmRoleBindReportRelationDao->insertMulti($roleBindReportRelationData);
            // }
        });
    }

    /**
     * 获取角色分页列表
     * @param array $data
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getPageList(array $data)
    {
        $data['sort_by_add_time'] = OrderBy::DESC;

        $relations = [
            'users:adm_role_id,real_name,user_no,sales_no,job_sn'
        ];

        return $this->crmAdmRoleDao->getPageList($data, relations: $relations);
    }

    /**
     * 下拉选择列表
     * @param array $payload
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function selectList(array $payload)
    {
        $columns = [
          'id','name','role_no'
        ];

        return $this->crmAdmRoleDao->getList($payload,$columns);
    }

    /**
     * 更新
     * @param string $roleNo
     * @param array $data
     * @param array $adminInfo
     * @return bool
     * @throws \Throwable
     */
    public function update(string $roleNo, array $data, array $adminInfo)
    {
        validator(
            $data, [
                'name'  => ['required', 'string', 'unique:'.$this->crmAdmRoleDao->getTableName().',name,' . $roleNo . ',role_no,deleted_at,NULL'],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        return app('db')->transaction(function () use ($roleNo, $data, $adminInfo)
        {
            /** @var CrmAdmRole $role */
            $role = $this->findByMainNo($roleNo);

            // 只允许修改未关联职位的角色信息
           if (filled($role->userPosition) && $role->name != array_get($data, 'name'))
           {
               throw new CrmUserException(100004);
           }

            $data['edit_admin_id']   = array_get($adminInfo, 'id', 0);
            $data['edit_admin_name'] = array_get($adminInfo, 'real_name', '');

            return $role->update($data);
        });
    }

    /**
     * 获取一个角色数据
     * @param string $roleNo
     * @return Builder|Model
     * @throws AppException
     */
    public function findByMainNo(string $roleNo)
    {
        return $this->crmAdmRoleDao->findByMainNoOrFail($roleNo);
    }

    /**
     * 批量更新在职员工角色
     * @param $params
     * @return mixed
     * @throws \Throwable
     */
    public function batchSetUserRole($params)
    {
        $roleNo = array_pull($params, 'role_no');

        $roleUserNo = array_pull($params, 'role_user_no');

        /** @var CrmAdmRole $role */
        $role = $this->findByMainNo($roleNo);

        $role->load('users:adm_role_id,real_name,user_no,sales_no,job_sn');

        $oldUserNos = $role->users->pluck('user_no')->toArray();

        return app('db')->transaction(function () use ($roleUserNo, $oldUserNos, $role)
        {
            if (filled($roleUserNo))
            {
                $delUserNos = array_diff($oldUserNos, $roleUserNo);

                // 清除权限
                if (!empty($delUserNos))
                {
                    $this->crmUserDao->batchSetUserRole($delUserNos, ['adm_role_id' => 0]);
                }

                $this->crmUserDao->batchSetUserRole($roleUserNo, ['adm_role_id' => $role->id]);
            }
            else
            {
                // 置空人员，原来的移除
                if ($oldUserNos)
                {
                    $this->crmUserDao->batchSetUserRole($oldUserNos, ['adm_role_id' => 0]);
                }
            }
        });
    }

    /**
     * 删除
     * @param string $roleNo
     * @param array $params
     * @param array $adminInfo
     * @throws AppException
     * @throws \Throwable
     */
    public function delete(array $payload, array $adminInfo)
    {
        $payload = validator(
            $payload, [
            'role_no' => 'required',
        ], customAttributes: ['role_no' => '角色编号']
        )->validate();

        $columns = [
            'id', 'role_no', 'edit_admin_id','edit_admin_name'
        ];

        /** @var CrmAdmRole $role */
        $role = $this->crmAdmRoleDao->findByMainNoOrFail($payload['role_no'], columns: $columns);

        $role->loadCount('users');

        if ($role->users_count > 0)
        {
            throw new AppException(100003, message: '角色下面还有关联员工，不支持删除');
        }

        app('db')->transaction(function () use ($role, $adminInfo)
        {
            $role->update([
                'edit_admin_id'   => $adminInfo['id'] ?? 0,
                'edit_admin_name' => $adminInfo['real_name'] ?? '',
            ]);

            $role->delete();
        });
    }
}
