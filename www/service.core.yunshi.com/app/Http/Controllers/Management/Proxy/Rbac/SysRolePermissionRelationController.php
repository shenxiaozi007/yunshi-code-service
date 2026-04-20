<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Management\Business\Rbac\CoreRolePermissionRelationBusiness;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Laravel\Lumen\Http\ResponseFactory;
use Throwable;

/**
 * 后台角色权限分配
 * Class SysRolePermissionRelationController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 */
class SysRolePermissionRelationController extends BaseController
{
    /**
     * 分配权限
     * @param Request $request
     * @param CoreRolePermissionRelationBusiness $sysRolePermissionRelationBusiness
     * @return array|Response|ResponseFactory|null
     * @throws AppException
     * @throws Throwable
     */
    public function update(Request $request, CoreRolePermissionRelationBusiness $sysRolePermissionRelationBusiness)
    {
        $this->validate($request, [
            'role_id'                           => ['required', 'integer'],
            'permissions'                       => ['nullable', 'array'],
            'permissions.*.id'                  => ['required', 'integer'],
            'permissions.*.encryption_option'   => ['nullable', 'string', Rule::in(EncryptionOption::all())],
        ]);

        $data = $request->only(['permissions']);

        $payload['edit_admin_id']      = management_auth_info_id();
        $payload['edit_admin_name']    = management_auth_info_name();

        return $this->revert($sysRolePermissionRelationBusiness->update($request->role_id, $data, $payload));
    }

}
