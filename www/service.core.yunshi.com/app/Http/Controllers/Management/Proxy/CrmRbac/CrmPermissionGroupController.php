<?php

namespace App\Http\Controllers\Management\Proxy\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Management\Business\CrmRbac\CrmPermissionGroupBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CrmPermissionGroupController extends BaseController
{
    /**
     * 权限详情，树形结构
     * @param Request $request
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CrmPermissionGroupBusiness $business)
    {
        if (blank($roleNo = $request->get('role_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $business->getDetailByRoleNoAndSysTerminal($roleNo)
        );
    }

    /**
     * 获取crm权限列表
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     */
    public function permissions(CrmPermissionGroupBusiness $business): JsonResponse|array|null
    {
        return $this->revert(
            $business->getTree()
        );
    }

    /**
     * app权限详情，树形结构
     * @param Request $request
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detailForApp(Request $request, CrmPermissionGroupBusiness $business)
    {
        if (blank($roleNo = $request->get('role_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $business->getDetailByRoleNoAndSysTerminal($roleNo, SysTerminal::SYS_TERMINAL_APP)
        );
    }

    /**
     * 获取crm APP权限列表
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     */
    public function appPermissions(CrmPermissionGroupBusiness $business): JsonResponse|array|null
    {
        return $this->revert(
            $business->getTree(SysTerminal::SYS_TERMINAL_APP)
        );
    }
}
