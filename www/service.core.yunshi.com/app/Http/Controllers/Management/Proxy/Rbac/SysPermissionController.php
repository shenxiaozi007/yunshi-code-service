<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CorePermissionBusiness;
use Illuminate\Http\JsonResponse;

class SysPermissionController extends BaseController
{
    /**
     * 我的权限列表
     * @param CorePermissionBusiness $sysPermissionBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws \App\Exceptions\Common\AuthException
     */
    public function myPermissionList(CorePermissionBusiness $sysPermissionBusiness)
    {
        return $this->revert($sysPermissionBusiness->myPermissionList(management_auth_info_id()));
    }

}
