<?php

namespace App\Modules\Basics\Dao\Sales;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\Sales\CoreSales;
use Illuminate\Database\Eloquent\Model;

class CoreSalesDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CoreSales::class);
    }
}
