<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Modules\Basics\Dao\Rbac\CoreAdmPermissionGroupDao as BaseDao;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CoreAdmPermissionGroupDao extends BaseDao
{
    /**
     * @param int $pid
     * @return Collection
     */
    public function getByPid(int $pid = 0)
    {
        $query = $this->newBuilder();

        $query->pidQuery($pid);

        $query->orderBy('sort');

        return $query->get();
    }

    /**
     * 删除不存在当前别名的权限组列表
     * @param array $newAliasNameList
     * @return int
     */
    public function deleteListNotInAliasNameList(array $newAliasNameList)
    {
        return $this->getModel()->notInAliasNameQuery($newAliasNameList)->delete();
    }

    /**
     * 根据别名查询
     *
     * @param string $aliasName
     * @return Model|object|static|null
     */
    public function findByAliasName(string $aliasName)
    {
        return $this->getModel()->aliasNameQuery($aliasName)->first();
    }

}
