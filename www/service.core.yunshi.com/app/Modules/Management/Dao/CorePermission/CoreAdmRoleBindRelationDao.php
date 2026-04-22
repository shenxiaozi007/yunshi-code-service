<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Modules\Basics\Dao\Rbac\CoreAdmRoleBindRelationDao as BaseDao;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CoreAdmRoleBindRelationDao extends BaseDao
{
    /**
     * 根据角色ID删除
     * @param int $roleId
     * @return int
     */
    public function deleteByRoleId(int $roleId)
    {
        return $this->getModel()->roleIdQuery($roleId)->delete();
    }

    /**
     * 根据权限ID删除
     * @param int $permissionId
     * @return int
     */
    public function deleteByPermissionId(int $permissionId)
    {
        return $this->getModel()->permissionIdQuery($permissionId)->delete();
    }

    /**
     * @param $roleId
     * @param $permissionId
     * @return Model|object|static|null
     */
    public function findByRoleIdAndPermissionId($roleId, $permissionId)
    {
        return $this->getModel()->roleIdQuery($roleId)->permissionIdQuery($permissionId)->first();
    }

    /**
     * 根据角色ID获取权限
     * @param int $roleId
     * @param array $relations
     * @return Collection|static[]
     */
    public function getByRoleId(int $roleId, $relations = [])
    {
        return $this->getModel()->with($relations)->roleIdQuery($roleId)->get();
    }

    /**
     * @param $roleId
     * @param array $permissionIds
     * @return Model|object|static|null
     */
    public function findByPositionIdAndInPermissionId($roleId, array $permissionIds)
    {
        return $this->getModel()->roleIdQuery($roleId)->inPermissionIdQuery($permissionIds)->first();
    }

    /**
     * @param array $ids
     * @return Collection|static[]
     */
    public function getByRouteName(string $proxyRouteName)
    {
        return $this->getModel()->proxyRouteNameQuery($proxyRouteName)->get();
    }

}
