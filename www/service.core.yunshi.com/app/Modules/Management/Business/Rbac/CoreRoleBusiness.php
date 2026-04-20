<?php

namespace App\Modules\Management\Business\Rbac;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Model\CorePermission\CoreAdmRole;
use App\Modules\Basics\Model\CorePermission\CoreAdmRoleBindRelation;
use App\Modules\Basics\Model\CorePermission\Report\CoreAdmRoleBindReportRelation;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;
use App\Modules\Management\Dao\CorePermission\Report\CoreAdmRoleBindReportRelationDao;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CoreRoleBusiness extends BaseBusiness
{
    /**
     * CoreRoleBusiness constructor.
     */
    public function __construct(
        protected CoreAdmRoleDao    $coreAdmRoleDao,
        protected CoreAdmAccountDao $coreAdmAccountDao,
        protected CoreAdmRoleBindRelationDao $coreAdmRoleBindRelationDao,
        protected CoreAdmRoleBindReportRelationDao $coreAdmRoleBindReportRelationDao,
    ) {}

    /**
     * 存储
     * @param array $data
     * @param array $payload
     * @return Model
     */
    public function store(array $data, array $payload)
    {
        $data = validator(
            $data, [
                'name'  => [
                    'required',
                    'string',
                    Rule::unique($this->coreAdmRoleDao->getTableName())->whereNull('deleted_at'),
                ],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        $data['add_admin_id']    = $payload['add_admin_id'];
        $data['add_admin_name']  = $payload['add_admin_name'];

        return $this->coreAdmRoleDao->store($data);
    }

    /**
     * 复制
     * @param int $oldId
     * @param array $params
     * @param array $adminInfo
     * @throws \Throwable
     */
    public function copy(int $oldId, array $params, array $adminInfo)
    {
        $data       = validator(
            $params, [
                'name'  => [
                    'required',
                    'string',
                    Rule::unique($this->coreAdmRoleDao->getTableName())->whereNull('deleted_at'),
                ],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        /** @var CoreAdmRole $oldRole */
        $oldRole    = $this->coreAdmRoleDao->findOrFail($oldId);

        $data['add_admin_id']    = $adminInfo['add_admin_id'];
        $data['add_admin_name']  = $adminInfo['add_admin_name'];

        app('db')->transaction(function () use ($data, $oldRole, $adminInfo)
        {
            /** @var CoreAdmRole $roleInfo */
            $roleInfo = $this->coreAdmRoleDao->store($data);

            // 角色绑定权限
            $roleBindRelations      = $this->coreAdmRoleBindRelationDao->getByRoleId($oldRole->id);
            $roleBindRelationData   = [];
            /** @var CoreAdmRoleBindRelation $roleBindRelation */
            foreach ($roleBindRelations as $roleBindRelation)
            {
                $roleBindRelationData[] = [
                    'role_id'           => $roleInfo->id,
                    'permission_id'     => $roleBindRelation->permission_id,
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
                $this->coreAdmRoleBindRelationDao->insertMulti($roleBindRelationData);
            }

            // 角色绑定数据权限
            $roleBindReportRelations      = $this->coreAdmRoleBindReportRelationDao->getByRoleId($oldRole->id);
            $roleBindReportRelationData   = [];
            /** @var CoreAdmRoleBindReportRelation $roleBindReportRelation */
            foreach ($roleBindReportRelations as $roleBindReportRelation)
            {
                $roleBindReportRelationData[] = [
                    'role_id'               => $roleInfo->id,
                    'report_permission_id'  => $roleBindReportRelation->report_permission_id,
                    'add_admin_id'          => array_get($adminInfo, 'id', 0),
                    'add_admin_name'        => array_get($adminInfo, 'real_name', ''),

                    'add_time'              => get_now(),
                    'last_update_time'      => get_now(),
                    'updated_at'            => Carbon::now(),
                    'created_at'            => Carbon::now(),
                ];
            }

            if (filled($roleBindReportRelationData))
            {
                $this->coreAdmRoleBindReportRelationDao->insertMulti($roleBindReportRelationData);
            }
        });
    }

    /**
     * @param array $data
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getPageList(array $data)
    {
        $data['order_by'] = [
            'add_time,desc',
            'id,desc',
        ];

        return $this->coreAdmRoleDao->getPageList($data);
    }

    /**
     * 下拉选择列表
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function selectList()
    {
        $data['order_by'] = [
            'add_time,desc',
            'id,desc',
        ];

        return $this->coreAdmRoleDao->getAllList();
    }

    /**
     * 更新
     * @param int $id
     * @param array $data
     * @param array $adminInfo
     * @return Model
     * @throws AppException
     */
    public function update(int $id, array $data, array $adminInfo)
    {
        validator(
            $data, [
                'name'  => ['required', 'string', 'unique:'.$this->coreAdmRoleDao->getTableName().',name,' . $id . ',id,deleted_at,NULL'],
                'remark'=> ['string'],
            ], [], [
                'name'  => '角色名称',
                'remark'=> '角色描述',
            ]
        )->validate();

        $data['edit_admin_id']   = $adminInfo['edit_admin_id'];
        $data['edit_admin_name'] = $adminInfo['edit_admin_name'];

        return $this->coreAdmRoleDao->update($id, $data);
    }

    /**
     * 删除
     * @param int $id
     * @return mixed
     * @throws AppException
     */
    public function delete(int $id)
    {
        $role = $this->findById($id);

        return $role->delete();
    }

    /**
     * 获取一个角色数据
     * @param int $roleId
     * @return CoreAdmRole|Model
     * @throws AppException
     */
    public function findById(int $roleId)
    {
        return $this->coreAdmRoleDao->findOrFail($roleId);
    }

}
