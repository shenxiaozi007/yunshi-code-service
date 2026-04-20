<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmRoleBindRelation;
use Illuminate\Database\Eloquent\Model;

class CoreAdmRoleBindRelationDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CoreAdmRoleBindRelation::class);
    }
}
