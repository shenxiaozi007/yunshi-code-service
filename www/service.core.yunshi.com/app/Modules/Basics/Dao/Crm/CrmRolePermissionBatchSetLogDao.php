<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmRolePermissionBatchSetLog;

class CrmRolePermissionBatchSetLogDao  extends BaseDao
{
    /**
     * @return CrmRolePermissionBatchSetLog
     */
    protected function getModel(): CrmRolePermissionBatchSetLog
    {
        return app(CrmRolePermissionBatchSetLog::class);
    }
}
