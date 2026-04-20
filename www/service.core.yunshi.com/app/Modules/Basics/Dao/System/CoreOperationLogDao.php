<?php

namespace App\Modules\Basics\Dao\System;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\System\CoreOperationLog;
use Illuminate\Database\Eloquent\Model;

class CoreOperationLogDao extends BaseDao
{
    /**
     * @return CoreOperationLog
     */
    protected function getModel(): Model
    {
        return app(CoreOperationLog::class);
    }
}
