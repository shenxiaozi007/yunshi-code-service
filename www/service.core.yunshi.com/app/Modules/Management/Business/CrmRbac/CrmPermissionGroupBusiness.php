<?php

namespace App\Modules\Management\Business\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Basics\Dao\Crm\CrmPermissionGroupDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleBindRelationDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleDao;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRole;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class CrmPermissionGroupBusiness
 * @package App\Modules\Management\Business\CrmRbac
 */
class CrmPermissionGroupBusiness extends BaseBusiness
{

    /**
     * CrmPermissionGroupBusiness constructor.
     * @param CrmAdmRoleDao $crmAdmRoleDao
     * @param CrmPermissionGroupDao $crmPermissionGroupDao
     * @param CrmAdmRoleBindRelationDao $crmAdmRoleBindRelationDao
     */
    public function __construct(
        protected CrmAdmRoleDao $crmAdmRoleDao,
        protected CrmPermissionGroupDao $crmPermissionGroupDao,
        protected CrmAdmRoleBindRelationDao $crmAdmRoleBindRelationDao,
    )
    {}

    /**
     * 获取权限树
     * @param string $sysTerminal
     * @return Collection
     */
    public function getTree(string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        return $this->crmPermissionGroupDao->getByPid(0, $sysTerminal);
    }

    /**
     * 获取角色权限
     * @param string $roleNo
     * @param string $sysTerminal
     * @return array
     * @throws AppException
     */
    public function getDetailByRoleNoAndSysTerminal(string $roleNo, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        /** @var CrmAdmRole $roleInfo */
        $roleInfo = $this->crmAdmRoleDao->findByMainNoOrFail($roleNo, ['id']);

        $permissionList = $this->crmAdmRoleBindRelationDao->getByRoleIdAndSysTerminal($roleInfo->id, $sysTerminal);

        $permissionIds  = $permissionList->pluck('permission_id');

        $encryptByIds   = $permissionList->pluck('encryption_option', 'permission_id');

        $tree = $this->getTree($sysTerminal);

        return $this->checkPermissionGroups($tree->toArray(), $permissionIds->toArray(), $encryptByIds->toArray());
    }

    /**
     * 标记选中状态，方便前端
     * @param array $tree
     * @param array $hasPermissionIds
     * @param array $encryptByIds
     * @return array
     */
    public function checkPermissionGroups(array $tree, array $hasPermissionIds, array $encryptByIds)
    {
        // 遍历权限组
        foreach ($tree as $key => $permissionGroup)
        {
            // 处理权限
            $permissionGroup['permissions']       = $this->identityPermissionStatus(
                array_get($permissionGroup, 'permissions', []),
                $hasPermissionIds,
                $encryptByIds
            );

            $permissionGroup['permission_groups'] = $this->checkPermissionGroups(
                array_get($permissionGroup, 'permission_groups', []),
                $hasPermissionIds,
                $encryptByIds
            );

            // 若group节点中没有包含有效节点，则删除此group节点
            if (
                blank($permissionGroup['permissions'])
                && blank($permissionGroup['permission_groups'])
            ) {
                unset($tree[$key]);
                continue;
            }

            $tree[$key] = $permissionGroup;
        }

        return array_values($tree);
    }

    /**
     * 给权限打标识，前端用
     * @param array $permissions
     * @param array $hasPermissionIds
     * @param array $encryptByIds
     * @return array
     */
    private function identityPermissionStatus(array $permissions, array $hasPermissionIds, array $encryptByIds)
    {
        // 标识权限
        foreach ($permissions as $key => $permission)
        {
            $permissionId = array_get($permission, 'id');
            if (filled($permissionId))
            {
                $permission['is_checked']       = in_array($permissionId, $hasPermissionIds);
                $permission['encryption_option']= array_get($encryptByIds, $permissionId, '');

                $permissions[$key] = $permission;
            }
        }

        return array_values($permissions);
    }

}
