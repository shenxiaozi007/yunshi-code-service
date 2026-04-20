<?php

namespace App\Modules\Management\Business\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Common\RolePermissionBatchSetLogType;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleBindRelationDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleDao;
use App\Modules\Basics\Dao\Crm\CrmRolePermissionBatchSetLogDao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class CrmRolePermissionRelationBusiness extends BaseBusiness
{
    /**
     * CoreRolePermissionRelationBusiness constructor.
     * @param CrmAdmRoleBindRelationDao $crmAdmRoleBindRelationDao
     * @param CrmAdmRoleDao $crmAdmRoleDao
     * @param CrmRolePermissionBatchSetLogDao $batchSetLogDao
     */
    public function __construct(
        protected CrmAdmRoleBindRelationDao $crmAdmRoleBindRelationDao,
        protected CrmAdmRoleDao $crmAdmRoleDao,
        protected CrmRolePermissionBatchSetLogDao $batchSetLogDao,
    )
    {
    }

    /**
     * 修改角色权限
     * @param array $payload
     * @param array $adminInfo
     * @param string $sysTerminal
     * @return mixed
     * @throws AppException
     * @throws ValidationException
     */
    public function update(array $payload, array $adminInfo, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        $params = validator($payload, [
            'role_no'                         => ['required', 'string'],
            'permissions'                     => ['nullable', 'array'],
            'permissions.*.id'                => ['required', 'integer'],
            'permissions.*.encryption_option' => ['nullable', 'string', Rule::in(EncryptionOption::all())],
        ])->validate();

        $roleNo = array_pull($params, 'role_no', '');

        return app('db')->transaction(function () use ($roleNo, $payload, $adminInfo, $sysTerminal)
        {
            // 查看角色是否存在
            $roleInfo = $this->crmAdmRoleDao->findByMainNoOrFail($roleNo, ['id']);

            $this->crmAdmRoleBindRelationDao->deleteByRoleIdAndSysTerminal($roleInfo?->id, $sysTerminal);

            $permissions = array_get($payload, 'permissions', []);

            $data = array_map(function ($permission) use ($roleInfo, $adminInfo)
            {
                return [
                    'role_id'           => $roleInfo->id,
                    'permission_id'     => $permission['id'],
                    'encryption_option' => $permission['encryption_option'] ?? '',
                    'edit_admin_id'     => $adminInfo['edit_admin_id'],
                    'edit_admin_name'   => $adminInfo['edit_admin_name'],
                ];
            }, $permissions);

            $this->crmAdmRoleBindRelationDao->insert($data);
        });
    }

    /**
     * 批量修改角色权限
     * @param array $payload
     * @param array $adminInfo
     * @param string $sysTerminal
     * @return mixed
     * @throws AppException
     */
    public function batchUpdate(array $payload, array $adminInfo, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        $roleNos = array_pull($payload, 'role_nos', [-1]);

        $roleList = $this->crmAdmRoleDao->getByMainNo($roleNos, ['id']);

        if (blank($roleList))
        {
            throw new AppException(100003, [], '找不到对应的角色数据');
        }

        return app('db')->transaction(function () use ($payload, $adminInfo, $roleList, $roleNos, $sysTerminal)
        {
            $permissions   = array_get($payload, 'permissions', []);
            $permissionIds = array_pluck($permissions, 'id');

            foreach ($roleList as $role)
            {
                $this->crmAdmRoleBindRelationDao->deleteByRoleIdAndSysTerminal($role->id, $sysTerminal);

                $permissions = array_get($payload, 'permissions', []);

                $data = array_map(function ($permission) use ($role, $adminInfo)
                {
                    return [
                        'role_id'           => $role->id,
                        'permission_id'     => $permission['id'],
                        'encryption_option' => $permission['encryption_option'] ?? '',
                        'edit_admin_id'     => $adminInfo['edit_admin_id'],
                        'add_admin_id'      => $adminInfo['edit_admin_id'],
                        'edit_admin_name'   => $adminInfo['edit_admin_name'],
                        'add_admin_name'    => $adminInfo['edit_admin_name'],
                    ];
                }, $permissions);

                $this->crmAdmRoleBindRelationDao->insert($data);
            }

            // 操作记录
            return $this->batchSetLogStore($adminInfo, $roleNos, $permissionIds,
                RolePermissionBatchSetLogType::TOTAL_QUANTITY);
        });
    }

    /**
     * 批量设置记录的添加
     *
     * @param array $adminInfo
     * @param array $roleNos
     * @param $permissionIds
     * @param $type
     * @return Model
     */
    private function batchSetLogStore(array $adminInfo, array $roleNos, array $permissionIds, string $type): Model
    {
        $data = [
            'permission_batch_set_log_no' => snow_flake_id(),
            'role_nos'                    => $roleNos,
            'permission_ids'              => $permissionIds,
            'core_admin_id'               => $adminInfo['edit_admin_id'] ?? 0,
            'core_admin_name'             => $adminInfo['edit_admin_name'] ?? '',
            'type'                        => $type,
        ];

        return $this->batchSetLogDao->store($data);
    }

    /**
     * 批量新增权限
     * @param $params
     * @param $authInfo
     * @return bool
     * @throws AppException
     */
    public function batchAdd($params, $authInfo): bool
    {
        $roleNos     = array_unique(array_get($params, 'role_nos', []));
        $permissions = array_get($params, 'permissions', []);

        if (blank($roleNos) || blank($permissions))
        {
            return false;
        }

        $roleList = $this->crmAdmRoleDao->getByMainNo($roleNos, ['id']);

        // 实际新增的权限
        $addPermissions = [];
        $now            = get_now();

        foreach ($roleList as $role)
        {
            //获取公司原有权限
            $originPermissionIds = $this->crmAdmRoleBindRelationDao->getByRoleIdAndSysTerminal($role->id)
                ->pluck('permission_id')
                ->toArray();

            foreach ($permissions as $permission)
            {
                if (!in_array((int)$permission['id'], $originPermissionIds, true))
                {
                    $addPermissions[] = [
                        'add_admin_id'          => $authInfo['edit_admin_id'],
                        'add_admin_name'        => $authInfo['edit_admin_name'],
                        'role_id'               => $role->id,
                        'permission_id'         => $permission['id'],
                        'add_time'              => $now,
                        'last_update_time'      => $now,
                        'created_at'            => date("Y-m-d H:i:s"),
                        'updated_at'            => date("Y-m-d H:i:s"),
                    ];
                }
            }
        }

        if (filled($addPermissions))
        {
            //批量添加数据
            return app('db')->transaction(function () use ($addPermissions, $authInfo, $roleNos, $permissions)
            {
                //批量新增
                $this->crmAdmRoleBindRelationDao->insert($addPermissions);

                $permissionIds = array_pluck($permissions, 'id');

                //添加日志
                $this->batchSetLogStore($authInfo, $roleNos, $permissionIds,
                    RolePermissionBatchSetLogType::INCREMENT);

                return true;
            });
        }

        return false;
    }

    /**
     * 批量删除
     * @param $params
     * @param $authInfo
     * @param string $sysTerminal
     * @return bool
     * @throws AppException
     */
    public function batchDelete($params, $authInfo, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB): bool
    {
        $roleNos     = array_unique(array_get($params, 'role_nos', []));
        $permissions = array_get($params, 'permissions', []);

        if (blank($roleNos) || blank($permissions))
        {
            return false;
        }

        $roleList      = $this->crmAdmRoleDao->getByMainNo($roleNos, ['id', 'role_no']);
        $permissionIds = array_pluck($permissions, 'id');

        $deleteLogRoleNos = [];

        foreach ($roleList as $role)
        {
            //获取公司原有权限
            $originPermissionIds = $this->crmAdmRoleBindRelationDao->getByRoleIdAndSysTerminal($role->id, $sysTerminal)
                ->pluck('permission_id')
                ->toArray();

            // 需要删除的权限和已有权限取交集
            $deletePermissionIds = array_intersect($permissionIds, $originPermissionIds);

            if (filled($deletePermissionIds))
            {
                $result = app('db')->transaction(function () use ($deletePermissionIds, $role)
                {
                    // 删除公司权限
                    $this->crmAdmRoleBindRelationDao->deleteByRoleIdAndIds($role->id, $deletePermissionIds);

                    return true;

                });

                if ($result)
                {
                    $deleteLogRoleNos[] = $role->role_no;
                }
            }
        }

        //写入日志
        if (filled($deleteLogRoleNos))
        {
            $this->batchSetLogStore($authInfo, $deleteLogRoleNos, $permissionIds,
                RolePermissionBatchSetLogType::DELETE);
            return true;
        }

        return false;
    }

}
