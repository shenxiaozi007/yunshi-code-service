<?php

namespace App\Modules\Management\Dao\Common;

use App\Modules\Basics\Dao\Common\BaseRegionDao as BaseDao;

/**
 * Class BaseRegionDao
 * @package App\Modules\Management\Dao\Crm
 */
class BaseRegionDao extends BaseDao
{

    /**
     * 取列表，支持 page_size
     *
     * @param array $params
     * @param array $columns
     * @param array $relations
     *
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * @throws \App\Exceptions\Common\AppException
     */
    public function getList(array $params = [], array $columns = [], array $relations = [])
    {
        $query = $this->doQuery($params, $columns, $relations);

        if (filled($pageSize = array_get($params, 'page_size'))) {
            $query->limit($pageSize);
        }

        return $query->get();
    }

    /**
     * 分页获取部门列表
     *
     * @param array $params
     * @param array $columns
     * @param array $relations
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     * @throws \App\Exceptions\Common\AppException
     */
    public function getPageList(array $params = [], array $columns = [], array $relations = [])
    {
        return parent::getPageList($params, $columns, $relations);
    }
}
