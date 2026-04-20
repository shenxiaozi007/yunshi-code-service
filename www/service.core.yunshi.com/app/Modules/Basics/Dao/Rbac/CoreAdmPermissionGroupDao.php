<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmPermissionGroup;
use Illuminate\Database\Eloquent\Model;

class CoreAdmPermissionGroupDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CoreAdmPermissionGroup::class);
    }
}
