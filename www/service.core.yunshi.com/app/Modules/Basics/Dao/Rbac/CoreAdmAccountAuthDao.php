<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmAccountAuth;
use Illuminate\Database\Eloquent\Model;

/**
 * @author 秦昊
 */
class CoreAdmAccountAuthDao extends BaseDao
{
    /**
     * @return Model
     * @author 秦昊
     */
    protected function getModel(): Model
    {
        return app(CoreAdmAccountAuth::class);
    }

    /**
     * 通过account id 查询
     * @param int $accountId
     * @param array $columns
     * @return mixed
     */
    public function findByAccountId(int $accountId,array $columns = [])
    {
        return $this->newBuilder()->select($this->getSelectColumns($columns))->accountIdQuery($accountId)->first();
    }
}
