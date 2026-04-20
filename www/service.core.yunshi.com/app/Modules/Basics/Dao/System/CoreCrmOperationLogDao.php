<?php

namespace App\Modules\Basics\Dao\System;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\System\CoreCrmOperationLog;
use Illuminate\Database\Eloquent\Model;

class CoreCrmOperationLogDao extends BaseDao
{
    /**
     * @return CoreCrmOperationLog
     */
    protected function getModel(): Model
    {
        return app(CoreCrmOperationLog::class);
    }
}
