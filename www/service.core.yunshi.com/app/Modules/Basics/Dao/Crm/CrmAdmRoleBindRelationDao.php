<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRoleBindRelation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrmAdmRoleBindRelationDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmAdmRoleBindRelation::class);
    }

    /**
     * 根据角色ID删除
     * @param int $roleId
     * @param string $sysTerminal
     * @return int
     * @throws AppException
     */
    public function deleteByRoleIdAndSysTerminal(int $roleId, string $sysTerminal)
    {
        $params = [
            'role_id'                 => $roleId,
            'permission_sys_terminal' => $sysTerminal,
        ];

        return $this->doQuery($params)->delete();
    }

    /**
     * 根据角色ID获取权限
     * @param int $roleId
     * @return Collection
     * @throws AppException
     */
    public function getByRoleId(int $roleId)
    {
        $params = [
            'role_id'                 => $roleId,
        ];

        return $this->doQuery($params)->get();
    }

    /**
     * 根据角色ID获取权限
     * @param int $roleId
     * @param string $sysTerminal
     * @return Collection
     * @throws AppException
     */
    public function getByRoleIdAndSysTerminal(int $roleId, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        $params = [
            'role_id'                 => $roleId,
            'permission_sys_terminal' => $sysTerminal,
        ];

        return $this->doQuery($params)->get();
    }

    /**
     * 根据角色ID删除
     * @param int $roleId
     * @param array $permissionIds
     * @return int
     * @throws AppException
     */
    public function deleteByRoleIdAndIds(int $roleId, array $permissionIds): int
    {
        $params = [
            'role_id'          => $roleId,
            'in_permission_id' => $permissionIds,
        ];

        return $this->doQuery($params)->delete();
    }

    /**
     * 获取权限
     * @param int $roleId
     * @param string $sysTerminal
     * @return Collection
     * @throws AppException
     */
    public function getBySysTerminal(int $roleId, string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        $params = [
            'permission_sys_terminal' => $sysTerminal,
        ];

        return $this->doQuery($params)->get();
    }
}
