<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Dao\Rbac\CoreAdmPermissionDao as BaseDao;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CoreAdmPermissionDao extends BaseDao
{
    /**
     * 获取在组别名的权限
     * @param array $newAliasNameList
     * @return Collection|static[]
     */
    public function getInGroupAlias(array $newAliasNameList)
    {
        return $this->getModel()->inGroupAliasQuery($newAliasNameList)->get();
    }

    /**
     * 获取在组别名的权限
     * @param array $newAliasNameList
     * @return Collection|static[]
     */
    public function getNotInGroupAlias(array $newAliasNameList)
    {
        return $this->getModel()->notInGroupAliasQuery($newAliasNameList)->get();
    }

    /**
     * 删除不包含的别名权限
     * @param array $aliasNames
     * @return int
     */
    public function forceDeleteNotInAliasNames(array $aliasNames)
    {
        return $this->getModel()->notInAliasNamesQuery($aliasNames)->forceDelete();
    }

    /**
     * @param string $aliasName
     * @return Model|object|static|null
     */
    public function findByAliasName(string $aliasName)
    {
        return $this->getModel()->aliasNameQuery($aliasName)->first();
    }

    /**
     * @param array $ids
     * @return Collection|static[]
     */
    public function getInIds(array $ids)
    {
        return $this->getModel()->inIdsQuery($ids)->get();
    }

    /**
     * 通过后端路由查找
     * @param string $path
     * @return Model|object|static|null
     */
    public function findByRouteName(string $path)
    {
        return $this->getModel()->proxyRouteNameQuery($path)->first();
    }

    /**
     * @param string $path
     * @param array $columns
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getByRouteName(string $path, array $columns = [])
    {
        return $this->doQuery(
            ['proxy_route_name' => $path],
            $columns
        )->get();
    }


    /**
     * 通过 是否初始化 获取列表
     * @param int $isInit
     * @param array $columns
     * @param array $relations
     * @return Builder[]
     * @throws AppException
     */
    public function getListByIsInit(int $isInit, array $columns = [], array $relations = [])
    {
        $params = [
            'is_init' => $isInit,
        ];

        return $this->getList($params, $columns, $relations);
    }
}
