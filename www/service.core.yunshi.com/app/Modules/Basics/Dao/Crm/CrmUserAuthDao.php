<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmUserAuth;
use Illuminate\Database\Eloquent\Model;

class CrmUserAuthDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmUserAuth::class);
    }
}
