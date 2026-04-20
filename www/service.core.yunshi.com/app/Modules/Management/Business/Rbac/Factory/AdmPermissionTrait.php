<?php
namespace App\Modules\Management\Business\Rbac\Factory;

use App\Exceptions\Common\AppException;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;

/**
 * 获取adminAccountId的权限
 */
trait AdmPermissionTrait
{
    /**
     * 获取权限列表
     * @param int $admAccountId
     * @param string $permissionField
     * @return array
     * @throws AppException
     */
    public function getPermissionByAdmAccountId(int $admAccountId, string $permissionField):array
    {
        $clientRouteNames = [];
        $sysUser          = CoreAdmAccountDao::getInstance()->findOrFail($admAccountId);

        // 没有超管角色，通过关联表去查
        $sysRolePermissionRelations = CoreAdmRoleBindRelationDao::getInstance()->getByRoleId($sysUser->role_id, [
            'sysPermission'
        ]);

        $sysRolePermissionRelations->each(function ($sysRolePermissionRelation) use (& $clientRouteNames, $permissionField)
        {
            if ($sysPermission = $sysRolePermissionRelation->sysPermission)
            {
                $clientRouteNames = array_merge((array)$sysPermission->$permissionField, $clientRouteNames);
            }
        });

        return array_values(array_unique($clientRouteNames));
    }
}
