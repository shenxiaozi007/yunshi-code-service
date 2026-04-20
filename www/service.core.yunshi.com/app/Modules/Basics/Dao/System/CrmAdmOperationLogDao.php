<?php

namespace App\Modules\Basics\Dao\System;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\System\CrmAdmOperationLog;
use Illuminate\Database\Eloquent\Model;

class CrmAdmOperationLogDao extends BaseDao
{
    /**
     * @return CrmAdmOperationLog
     */
    public function getModel(): Model
    {
        return app(CrmAdmOperationLog::class);
    }

}
