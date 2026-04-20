<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmAccountBindCrmLog;
use Illuminate\Database\Eloquent\Model;

class CoreAdmAccountBindCrmLogDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CoreAdmAccountBindCrmLog::class);
    }
}
