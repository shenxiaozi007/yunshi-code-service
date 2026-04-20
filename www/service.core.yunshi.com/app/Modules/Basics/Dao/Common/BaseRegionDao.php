<?php

namespace App\Modules\Basics\Dao\Common;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\Common\BaseRegion;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRegionDao
 * @package App\Modules\Management\Dao\Crm
 */
class BaseRegionDao extends BaseDao
{

    /**
     * 获取模型
     *
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(BaseRegion::class);
    }

    /**
     * 根据PID获取列表
     * @param int $pid
     * @return
     */
    public function getListByPid(int $pid = 0)
    {
        return $this->getModel()
                    ->pidQuery($pid)
                    ->get();
    }
}
