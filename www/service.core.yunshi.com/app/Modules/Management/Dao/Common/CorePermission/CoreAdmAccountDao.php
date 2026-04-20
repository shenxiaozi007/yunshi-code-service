<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Dao\Rbac\CoreAdmAccountDao as BaseDao;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CoreAdmAccountDao extends BaseDao
{
    /**
     * @param int $id
     * @return Model|object|static|null
     */
    public function findByIdAndCloseAtIsNull(int $id)
    {
        return $this->getModel()->closeAtQuery(0)->find($id);
    }

    /**
     * 根据账户查找
     * @param string $account
     * @param array $columns
     * @return mixed
     */
    public function findByAccountOrFail(string $account, array $columns = [])
    {
        return $this->newBuilder()->select($this->getSelectColumns($columns))->accountQuery($account)->firstOrFail();
    }

    /**
     * @param int $id
     * @return Model|object|static
     */
    public function detail(int $id)
    {
        return $this->newBuilder()->with(
            [
                'sysRole:id,name',
                'bindCrmUser:user_no,account',
            ]
        )->findOrFail($id);
    }

    /**
     * 获取每个管理员角色的用户人数
     * @param array $params
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getQuantityGroupByRoleId(array $params = [])
    {
        return $this->doQuery($params)
            ->selectRaw('role_id, COUNT(role_id) AS quantity')
            ->groupBy('role_id')
            ->get();
    }

    /**
     * 通过 id 数组获取列表
     * @param array $idArr
     * @param array $columns
     * @param array $relations
     * @return \Illuminate\Database\Eloquent\Collection
     * @throws AppException
     */
    public function getListByIdArr(array $idArr, array $columns = [], array $relations = [])
    {
        if (blank($idArr))
        {
            throw new AppException(100003);
        }

        $params = [
            'ids' => $idArr,
        ];

        return $this->getList($params, $columns, $relations);
    }

    /**
     * 根据账户查找
     * @param string $account
     * @param array $columns
     * @return mixed
     */
    public function findByAccount(string $account, array $columns = [])
    {
        return $this->newBuilder()->select($this->getSelectColumns($columns))->accountQuery($account)->first();
    }
}
