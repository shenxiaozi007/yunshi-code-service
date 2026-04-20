<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Basics\Model\CrmPermission\CrmAdmPermissionGroup;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CrmPermissionGroupDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmAdmPermissionGroup::class);
    }

    /**
     * @param int $pid
     * @param string $sysTerminal
     * @return Collection
     */
    public function getByPid(int $pid = 0,string $sysTerminal = SysTerminal::SYS_TERMINAL_WEB)
    {
        $query = $this->newBuilder();

        $query->pidQuery($pid);

        $query->sysTerminalQuery($sysTerminal);

        $query->orderBy('sort');

        return $query->get();
    }
}
