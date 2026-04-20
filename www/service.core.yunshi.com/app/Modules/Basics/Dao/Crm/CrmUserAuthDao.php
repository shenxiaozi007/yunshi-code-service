<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmUserAuth;
use Illuminate\Database\Eloquent\Model;

/**
 * @author 秦昊
 * Date: 2021/9/13 14:21
 */
class CrmUserAuthDao extends BaseDao
{
    /**
     * @return Model
     * @author 秦昊
     * Date: 2021/9/13 14:23
     */
    protected function getModel(): Model
    {
        return app(CrmUserAuth::class);
    }
}
