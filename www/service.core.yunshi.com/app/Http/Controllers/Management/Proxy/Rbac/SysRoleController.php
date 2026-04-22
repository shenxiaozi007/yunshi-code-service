<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CoreRoleBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SysRoleController extends BaseController
{
    /**
     * 存储角色
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws ValidationException|AuthException
     */
    public function store(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        $data['add_admin_id']       = management_auth_info_id();
        $data['add_admin_name']     = management_auth_info_name();

        return $this->revert($sysRoleBusiness->store($request->all(), $data));
    }

    /**
     * 复制角色
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws \Throwable
     */
    public function copy(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        $data = $request->only(
            [
                'name',
                'remark',
            ]
        );

        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        $payload['add_admin_id']    = management_auth_info_id();
        $payload['add_admin_name']  = management_auth_info_name();

        $sysRoleBusiness->copy($id, $data, $payload);

        return $this->revert([]);
    }

    /**
     * 角色列表
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function getPageList(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        return $this->revert($sysRoleBusiness->getPageList($request->all()));
    }

    /**
     * 角色列表
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function selectList(CoreRoleBusiness $sysRoleBusiness)
    {
        return $this->revert($sysRoleBusiness->selectList());
    }

    /**
     * 获取角色详情
     *
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        return $this->revert($sysRoleBusiness->findById($id));
    }

    /**
     * 公司角色
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException|AuthException
     */
    public function update(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        $data = $request->only(
            [
                'name',
                'remark',
            ]
        );

        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        $payload['edit_admin_id']      = management_auth_info_id();
        $payload['edit_admin_name']    = management_auth_info_name();

        return $this->revert($sysRoleBusiness->update($id, $data, $payload));
    }

    /**
     * 删除
     * @param Request $request
     * @param CoreRoleBusiness $sysRoleBusiness
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException
     */
    public function delete(Request $request, CoreRoleBusiness $sysRoleBusiness)
    {
        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        $sysRoleBusiness->delete($id);

        return $this->revert([]);
    }

}
