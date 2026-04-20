<?php

namespace App\Modules\Management\Dao\CorePermission;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmOperationLog;
use Illuminate\Database\Eloquent\Model;

class CoreAdmOperationLogDao extends BaseDao
{
    /**
     * @return CoreAdmOperationLog
     */
    public function getModel(): Model
    {
        return app(CoreAdmOperationLog::class);
    }

}
