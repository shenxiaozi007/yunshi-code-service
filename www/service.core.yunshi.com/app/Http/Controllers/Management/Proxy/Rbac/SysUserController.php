<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Exceptions\Management\SysPermissionException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CoreAccountBusiness;
use App\Modules\Management\Business\Rbac\CorePermissionBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 * 后台管理员控制器
 *
 * ============================================================================
 * 路由配置 (routes/management/proxy/rbac/sys_user.php)
 * ============================================================================
 * 路由前缀: rbac/sys-user
 * 命名空间: Rbac
 *
 * 【不需要登录验证的路由】
 * ----------------------------------------------------------------------------
 * POST /rbac/sys-user/login
 *   - 方法: login(Request $request, CoreAccountBusiness $sysUserBusiness, CorePermissionBusiness $corePermissionBusiness)
 *   - 路由名称: MANAGEMENT_LOGIN
 *   - 说明: 登录
 *
 * GET  /rbac/sys-user/login-captcha-image
 *   - 方法: getLoginCaptchaImage() [注:此方法在当前文件中未找到]
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 登录图形验证码
 *
 * POST /rbac/sys-user/get-login-info
 *   - 方法: getLoginInfo(Request $request, CoreAccountBusiness $sysUserBusiness, CorePermissionBusiness $corePermissionBusiness)
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 获取登录用户信息（需要account, password参数）
 *
 * POST /rbac/sys-user/send-mobile-captcha
 *   - 方法: sendMobileCaptcha() [注:此方法在当前文件中未找到]
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 发送手机验证码
 *
 * GET  /rbac/sys-user/select-list
 *   - 方法: selectList() [注:此方法在当前文件中未找到]
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 下拉列表
 *
 * GET  /rbac/sys-user/get-list
 *   - 方法: getList(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 成员列表，不分页
 *
 * 【需要登录验证的路由】(middleware: auth:jwt-management)
 * ----------------------------------------------------------------------------
 * POST /rbac/sys-user/change-personal-password
 *   - 方法: changePersonalPassword(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_CHANGE_PERSONAL_PASSWORD
 *   - 说明: 修改个人密码（需要password, new_password, confirm_new_password参数）
 *
 * POST /rbac/sys-user/change-personal-avatar
 *   - 方法: changePersonalAvatar(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_CHANGE_PERSONAL_AVATAR
 *   - 说明: 修改个人头像（需要avatar_id参数）
 *
 * GET  /rbac/sys-user/logout
 *   - 方法: logout(CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_LOGOUT
 *   - 说明: 退出登录
 *
 * GET  /rbac/sys-user/detail
 *   - 方法: detail(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_DETAIL
 *   - 说明: 成员详情（需要id参数）
 *
 * GET  /rbac/sys-user/user-info
 *   - 方法: curUserInfo(CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_USER_INFO
 *   - 说明: 当前成员信息
 *
 * POST /rbac/sys-user/store
 *   - 方法: store(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_STORE
 *   - 说明: 存储/添加成员
 *
 * POST /rbac/sys-user/update
 *   - 方法: update(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_UPDATE
 *   - 说明: 更新成员信息（需要id参数）
 *
 * GET  /rbac/sys-user/get-page-list
 *   - 方法: getPageList(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_GET_PAGE_LIST
 *   - 说明: 成员分页列表
 *
 * POST /rbac/sys-user/update-account-status
 *   - 方法: updateAccountStatus(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS
 *   - 说明: 更新账户状态（需要account_no, account_status参数）
 *
 * POST /rbac/sys-user/update-password
 *   - 方法: updatePassword(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_UPDATE_PASSWORD
 *   - 说明: 修改密码（需要account_no, new_password, confirm_new_password参数）
 *
 * POST /rbac/sys-user/bind-crm-user
 *   - 方法: bindCrmUser(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_BIND_USER
 *   - 说明: 管理员绑定crm用户（需要account, crm_user_no参数）
 *
 * POST /rbac/sys-user/unbind-crm-user
 *   - 方法: unbindCrmUser(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_UNBIND_USER
 *   - 说明: 管理员解除绑定crm用户（需要account参数）
 *
 * GET  /rbac/sys-user/password-expire-status
 *   - 方法: getPasswordExpireStatus(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_PASSWORD_EXPIRE_STATUS
 *   - 说明: 获取登录用户密码过期状态
 *
 * GET  /rbac/sys-user/force-logout-by-account
 *   - 方法: forceLogoutByAccount(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT
 *   - 说明: 管理员强制退出成员（需要account参数）
 *
 * POST /rbac/sys-user/set-manage-specific-company
 *   - 方法: setSysUserManageSpecificCompany(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: MANAGEMENT_SYS_USER_MANAGE_SPECIFIC_COMPANY
 *   - 说明: 设置内部管理员细分管理外部公司
 *
 * POST /rbac/sys-user/save-extension-status
 *   - 方法: saveExtensionStatus(Request $request, CoreAccountBusiness $sysUserBusiness)
 *   - 路由名称: [未定义]
 *   - 说明: 编辑插件开关（需要account_no参数）
 * ============================================================================
 */
class SysUserController extends BaseController
{
    /**
     * 存储
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException
     */
    public function store(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        return $this->revert($sysUserBusiness->store($request->all()));
    }

    /**
     * 成员列表
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function getPageList(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        return $this->revert($sysUserBusiness->getPageList($request->all()));
    }

    /**
     * 成员列表，不分页
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function getList(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        return $this->revert($sysUserBusiness->getList($request->all()));
    }

    /**
     * 更新
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException
     */
    public function update(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $sysUserBusiness->update($id, $request->all())
        );
    }

    /**
     * 使账号失效
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|AuthException
     */
    public function close(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        if ($id == 1)
        {
            throw new AuthException(400009);
        }

        return $this->revert($sysUserBusiness->close($request->id));
    }

    /**
     * 管理员强制退出成员
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws ValidationException
     */
    public function forceLogoutByAccount(Request $request, CoreAccountBusiness $sysUserBusiness): JsonResponse|array|null
    {
        $this->validate($request, [
            'account' => 'required',
        ]);

        $sysUserBusiness->forceLogoutByAccount($request->account);

        return $this->revert(null);
    }

    /**
     * 编辑插件开关
     *
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     */
    public function saveExtensionStatus(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $params = $this->validate($request, [
            'account_no' => 'required',
        ]);

        return $this->revert($sysUserBusiness->saveExtensionStatus($params['account_no']));
    }

    /**
     * 更新账户状态
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws SysPermissionException
     * @throws ValidationException
     */
    public function updateAccountStatus(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $accountNo  = $request->account_no;
        $status     = $request->account_status;
        if (blank($accountNo) || blank($status))
        {
            throw new AppException(100003);
        }

        return $this->revert($sysUserBusiness->updateAccountStatus($accountNo, $status));
    }

    /**
     * 修改密码
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     */
    public function updatePassword(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $accountNo = $request->account_no;

        if (blank($accountNo))
        {
            throw new AppException(100003);
        }

        $data = $request->only(
            [
                'new_password',
                'confirm_new_password'
            ]
        );

        return $this->revert($sysUserBusiness->updatePassword($accountNo, $data));
    }

    /**
     * 登录
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @param CorePermissionBusiness $corePermissionBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws AuthException
     * @throws ValidationException
     */
    public function login(Request $request, CoreAccountBusiness $sysUserBusiness, CorePermissionBusiness $corePermissionBusiness)
    {
        // 获取登录token
        $token = $sysUserBusiness->login($request->all());

        return $this->revert(
            [
                'token'         => $token,
                'permission'    => $corePermissionBusiness->myPermissionList(management_auth_info_id()),
                'user_info'     => $sysUserBusiness->detail(management_auth_info_id()),
            ]
        );
    }

    /**
     * 当前成员信息
     *
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws AuthException
     */
    public function curUserInfo(CoreAccountBusiness $sysUserBusiness)
    {
        return $this->revert($sysUserBusiness->detail(management_auth_info_id()));
    }

    /**
     * 成员详情
     *
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $id = $request->id;
        if (blank($id))
        {
            throw new AppException(100003);
        }

        return $this->revert($sysUserBusiness->detail($id));
    }

    /**
     * 修改个人头像
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|AuthException
     */
    public function changePersonalAvatar(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $data = $request->only(['avatar_id']);

        $payload['id'] = management_auth_info_id();

        return $this->revert($sysUserBusiness->updateAvatar($data, $payload));
    }

    /**
     * 退出
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function logout(CoreAccountBusiness $sysUserBusiness)
    {
        $sysUserBusiness->logout();

        return $this->revert([]);
    }

    /**
     * 修改个人密码
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws AuthException|ValidationException
     */
    public function changePersonalPassword(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $data = $request->only(
            [
                'password',
                'new_password',
                'confirm_new_password'
            ]
        );

        $adminInfo = management_auth_info();

        return $this->revert($sysUserBusiness->changePersonalPassword($adminInfo, $data));
    }

    /**
     * 管理员绑定crm用户
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|AuthException|ValidationException
     */
    public function bindCrmUser(Request $request, CoreAccountBusiness $sysUserBusiness): JsonResponse|array|null
    {
        $payload = $this->validate($request, [
            'account'     => 'required',
            'crm_user_no' => 'nullable|required',
        ], [], [
            'account'     => '账号',
            'crm_user_no' => 'crm账户编号',
        ]);

        $crmUserNo = (string)array_get($payload,'crm_user_no');
        $sysUserBusiness->bindCrmUser($payload['account'],$crmUserNo, management_auth_info());

        return $this->revert(null);
    }

    /**
     * 管理员解除绑定crm用户
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException|AuthException|ValidationException
     */
    public function unbindCrmUser(Request $request, CoreAccountBusiness $sysUserBusiness): JsonResponse|array|null
    {
        $payload = $this->validate($request, [
            'account'     => 'required',
        ]);

        $sysUserBusiness->unbindCrmUser($payload['account'], management_auth_info());

        return $this->revert(null);
    }

    /**
     * 获取登录用户密码过期状态
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return JsonResponse|array|null
     * @throws AuthException
     * @throws ValidationException
     */
    public function getPasswordExpireStatus(Request $request, CoreAccountBusiness $sysUserBusiness): JsonResponse|array|null
    {
        return $this->revert( $sysUserBusiness->getAdminPasswordExpireStatus(management_auth_info(),true));
    }

    /**
     * 设置内部管理员细分管理B端公司
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function setSysUserManageSpecificCompany(Request $request, CoreAccountBusiness $sysUserBusiness)
    {
        $params = $request->all();
        $result = $sysUserBusiness->setSysUserManageSpecificCompany($params);

        return $this->revert([
            'is_update' => $result,
        ]);
    }

    /**
     * 获取用户登录信息
     * @param Request $request
     * @param CoreAccountBusiness $sysUserBusiness
     * @param CorePermissionBusiness $corePermissionBusiness
     * @return array|JsonResponse|null
     * @throws AuthException
     * @throws ValidationException
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getLoginInfo(Request $request, CoreAccountBusiness $sysUserBusiness, CorePermissionBusiness $corePermissionBusiness)
    {
        // 获取登录token
        $payload = $this->validate($request, [
            'account'    => ['required', 'string'],
            'password'   => ['required', 'string'],
        ], [], [
            'account'    => '账号',
            'password'   => '密码',
        ]);

        // 获取登录用户信息
        $crmUser = $sysUserBusiness->getLoginInfo($payload['account'], $payload['password']);

        return $this->revert($crmUser);
    }

}
