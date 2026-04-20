<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CorePermissionGroupBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * 后台管理员权限组控制器
 * Class SysPermissionGroupController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 */
class SysPermissionGroupController extends BaseController
{
    /**
     * 权限详情，树形结构
     * @param Request $request
     * @param CorePermissionGroupBusiness $sysPermissionGroupBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CorePermissionGroupBusiness $sysPermissionGroupBusiness)
    {
        $roleId = $request->role_id;
        if (blank($roleId))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $sysPermissionGroupBusiness->getDetailByRoleId($roleId)
        );
    }

}
