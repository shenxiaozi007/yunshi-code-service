<?php
namespace App\Modules\Basics\Dao\Crm;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmUserPosition;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrmUserPositionDao  extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmUserPosition::class);
    }

    /**
     * 获取所有数据列表
     * @param array $columns
     * @param array $relations
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getAllList(array $columns = [], array $relations = [])
    {
        return $this->getList(columns:  $columns, relations: $relations);
    }
}
