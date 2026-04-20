<?php

namespace App\Http\Middleware\Permission;

use App\Exceptions\Common\AuthException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Management\Business\Rbac\CorePermissionBusiness;

/**
 * 管理员权限
 */
class ManagementPermission extends AccessControl
{
    /**
     * 获取权限业务对象
     * @return BaseBusiness
     */
    protected function getPermissionBusiness(): BaseBusiness
    {
        return app(CorePermissionBusiness::class);
    }

    /**
     * 登录用户ID
     * @throws AuthException
     */
    protected function getUserId(): int
    {
        return management_auth_info_id();
    }
}
