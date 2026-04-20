<?php

namespace App\Modules\Basics\Dao\Rbac;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Model\CorePermission\CoreAdmAccount;

class CoreAdmAccountDao extends BaseDao
{
    /**
     * @return CoreAdmAccount
     */
    protected function getModel(): CoreAdmAccount
    {
        return app(CoreAdmAccount::class);
    }

    /**
     * 根据部门编号
     * @param string $departmentNo
     * @return mixed
     */
    public function findByDepartmentNo(string $departmentNo)
    {
        return $this->newBuilder()
            ->accountStatusQuery(AccountStatus::ENABLE)
            ->departmentNoQuery($departmentNo)
            ->get();
    }

    /**
     * 根据角色id
     * @param array $roleIds
     * @return mixed
     */
    public function getByRoleId(array $roleIds)
    {
        return $this->newBuilder()
            ->roleIdQuery($roleIds)
            ->get();
    }

}
