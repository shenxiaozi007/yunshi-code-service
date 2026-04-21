<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CoreRoleBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * 后台角色控制器
 * Class SysRoleController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 * 
 * ============================================================================
 * 路由配置 (routes/management/proxy/rbac/sys_role.php)
 * ============================================================================
 * 路由前缀: rbac/sys-role
 * 命名空间: Rbac
 * 中间件: auth:jwt-management
 * 
 * 路由列表:
 * POST /rbac/sys-role/store
 *   - 方法: store(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_STORE
 *   - 说明: 存储角色（需要name, remark参数）
 * 
 * POST /rbac/sys-role/copy
 *   - 方法: copy(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_COPY
 *   - 说明: 复制角色（需要id, name, remark参数）
 * 
 * GET  /rbac/sys-role/detail
 *   - 方法: detail(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_DETAIL
 *   - 说明: 获取角色详情（需要id参数）
 * 
 * GET  /rbac/sys-role/page-list
 *   - 方法: getPageList(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST
 *   - 说明: 角色分页列表
 * 
 * GET  /rbac/sys-role/select-list
 *   - 方法: selectList(CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_SELECT_LIST
 *   - 说明: 角色下拉选择列表（不分页）
 * 
 * POST /rbac/sys-role/update
 *   - 方法: update(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_UPDATE
 *   - 说明: 更新角色信息（需要id, name, remark参数）
 * 
 * GET  /rbac/sys-role/delete
 *   - 方法: delete(Request $request, CoreRoleBusiness $sysRoleBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_ROLE_DELETE
 *   - 说明: 删除角色（需要id参数）
 * ============================================================================
 */
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
     * @author 秦昊
     * Date: 2021/8/26 10:28
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
