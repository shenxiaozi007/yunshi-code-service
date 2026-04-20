<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmPermission;
use Illuminate\Database\Eloquent\Model;

class CoreAdmPermissionDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CoreAdmPermission::class);
    }

}
