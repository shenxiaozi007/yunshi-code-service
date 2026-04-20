<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Dao\Rbac\CoreAdmRoleDao as BaseDao;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CoreAdmRoleDao extends BaseDao
{
    /**
     * @param int $id
     * @return Model|object|static|null
     */
    public function findById(int $id)
    {
        return $this->getModel()->with(
            [
                'corePermissions'
            ]
        )->idQuery($id)->first();
    }

    /**
     * 获取所有数据列表
     *
     * @param array $params
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getAllList(array $params = [], array $columns = [], array $relations = [])
    {
        return $this->getList(params: $params, columns: $columns, relations: $relations);
    }
}
