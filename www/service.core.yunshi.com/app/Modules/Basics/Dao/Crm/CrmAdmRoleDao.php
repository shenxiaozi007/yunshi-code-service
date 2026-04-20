<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRole;
use Illuminate\Database\Eloquent\Model;

class CrmAdmRoleDao  extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmAdmRole::class);
    }
}
