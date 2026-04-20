<?php

namespace App\Modules\Management\Business\Rbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Exceptions\Management\SysPermissionException;
use App\Kernel\Traits\PasswordTrait;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\CoreAccount\PasswordExpireStatus;
use App\Modules\Basics\Constant\Rbac\AdminOperation;
use App\Modules\Basics\Constant\Rbac\BindUserAction;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Dao\Crm\CrmUserDao;
use App\Modules\Basics\Dao\Rbac\CoreAdmAccountAuthDao;
use App\Modules\Basics\Model\CorePermission\CoreAdmAccount;
use App\Modules\Basics\Model\CrmPermission\CrmUser;
use App\Modules\Management\Business\Rbac\Factory\AuthPasswordErrorStatisticsTrait;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountBindCrmLogDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmPermissionDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmOperationLogDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;
use Exception;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Throwable;

class CoreAccountBusiness extends BaseBusiness
{
    use PasswordTrait;
    use AuthPasswordErrorStatisticsTrait;

    /**
     * CoreAccountBusiness constructor.
     * @param CoreAdmAccountDao $coreAdmAccountDao
     * @param CoreAdmAccountAuthDao $coreAdmAccountAuthDao
     * @param CoreAdmRoleDao $coreAdmRoleDao
     * @param CoreAdmRoleBindRelationDao $coreAdmRoleBindRelationDao
     * @param CoreAdmPermissionDao $coreAdmPermissionDao
     * @param CoreAdmOperationLogDao $coreAdmOperationLogDao
     * @param CoreAdmAccountBindCrmLogDao $coreAdmAccountBindCrmLogDao
     * @param CrmUserDao $crmUserDao
     */
    public function __construct(
        protected CoreAdmAccountDao $coreAdmAccountDao,
        protected CoreAdmAccountAuthDao $coreAdmAccountAuthDao,
        protected CoreAdmRoleDao $coreAdmRoleDao,
        protected CoreAdmRoleBindRelationDao $coreAdmRoleBindRelationDao,
        protected CoreAdmPermissionDao $coreAdmPermissionDao,
        protected CoreAdmOperationLogDao $coreAdmOperationLogDao,
        protected CoreAdmAccountBindCrmLogDao $coreAdmAccountBindCrmLogDao,
        protected CrmUserDao $crmUserDao,
    ) {
        $this->loadConfig();
    }

    /**
     * 存储
     * @param array $payload
     * @return array
     * @throws Throwable
     */
    public function store(array $payload): array
    {
        // 数据校验
        validator(
            $payload,
            [
                'real_name'        => ['required', 'string'],
                'account'          => ['required', 'string', 'min:5', 'username', Rule::unique($this->coreAdmAccountDao->getTableName())->whereNull('deleted_at')],
                'mobile'           => ['required', 'mobile', Rule::unique($this->coreAdmAccountDao->getTableName())->whereNull('deleted_at')],
                'role_id'          => ['required', 'integer', 'min:1', Rule::exists($this->coreAdmRoleDao->getTableName(), 'id')],
                'password'         => ['required', 'regex:' . $this->getStoragePasswordPattern()],
                'confirm_password' => ['required', 'same:password'],
                'department_no'    => ['required', 'string'],
            ],
            [
                'account.username' => ':attribute 只能包含字母或数字',
                'account.min'      => ':attribute 只能包含字母或数字且不少于5位字符',
                'password.regex'   => '新密码密码需要同时包含数字和英文字母，且满足8-32个字符',
            ],
            [
                'real_name'        => '成员姓名',
                'account'          => '账户',
                'role_id'          => '成员角色id',
                'password'         => '登录密码',
                'confirm_password' => '确认密码',
                'department_no'    => '所属部门编码',
            ]
        )->validate();

        return app('db')->transaction(function () use ($payload) {
            $data = [
                'account_no'     => snow_flake_id(),
                'real_name'      => array_get($payload, 'real_name') ?: '',
                'account'        => array_get($payload, 'account') ?: '',
                'mobile'         => array_get($payload, 'mobile') ?: '',
                'role_id'        => array_get($payload, 'role_id') ?: '',
                'account_status' => AccountStatus::ENABLE,
                'avatar_id'      => array_get($payload, 'avatar_id') ?: '',
                'open_at'        => get_now(),
                'department_no'  => array_get($payload, 'department_no') ?: '',
            ];

            $accountInfo = $this->coreAdmAccountDao->store($data);
            $accountId   = $accountInfo->id;

            $this->updatePasswordById($accountId, $payload['password']);

            return ['id' => $accountId];
        });
    }


    /**
     * 成员列表
     *
     * @param array $payload
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getPageList(array $payload)
    {
        $relations = ['department', 'sysRole', 'bindCrmUser:user_no,account'];

        /** @var CoreAdmAccount $list */
        $list = $this->coreAdmAccountDao->getPageList($payload, [], $relations);

        $list->append(['role_name', 'bind_crm_account', 'department_name']);

        $list->makeHidden($relations);

        return $list;
    }

    /**
     * 成员列表
     *
     * @param array $payload
     * @return Builder[]|Collection
     * @throws AppException
     */
    public function getList(array $payload, array $columns = [])
    {
        $relations = ['department'];

        $list = $this->coreAdmAccountDao->getList($payload, $columns,  relations: $relations);

        $list->append(['role_name']);

        $list->makeHidden(['sysRole']);

        return $list;
    }

    /**
     * 更新
     * @param $id
     * @param array $data
     * @return Model
     * @throws AppException
     * @throws ValidationException
     */
    public function update($id, array $data)
    {
        validator(
            $data,
            [
                'id'            => ['required', 'integer', 'min:1', Rule::exists($this->coreAdmAccountDao->getTableName())],
                'mobile'        => ['required', 'mobile', Rule::unique($this->coreAdmAccountDao->getTableName())->whereNull('deleted_at')->ignore($data['id'])],
                'role_id'       => ['required', 'integer', 'min:1', Rule::exists($this->coreAdmRoleDao->getTableName(), 'id')],
                'department_no' => ['required', 'string']
            ],
            [],
            [
                'id'            => '成员id',
                'mobile'        => '手机号',
                'role_id'       => '成员角色id',
                'department_no' => '部门编码',
            ]
        )->validate();

        // 仅限编辑角色和手机号
        $data = array_only($data, [
            'mobile',
            'role_id',
            'department_no',
        ]);

        return $this->coreAdmAccountDao->update($id, $data);
    }

    /**
     * @param int $id
     * @return Model
     * @throws AppException
     */
    public function close(int $id)
    {
        $result = $this->coreAdmAccountDao->update(
            $id,
            [
                'close_at'       => get_now(),
                'account_status' => AccountStatus::CANCEL,
            ]
        );

        $this->forceLogoutByAdminId($id);

        return $result;
    }

    /**
     * 更新状态
     * @param string $accountNo
     * @param string $status
     * @return mixed
     * @throws AppException
     * @throws SysPermissionException
     */
    public function updateAccountStatus(string $accountNo, string $status)
    {
        /** @var CoreAdmAccount $account */
        $account = $this->coreAdmAccountDao->findByMainNoOrFail($accountNo);

        $id = $account->id;

        validator(
            [
                'id'             => $id,
                'account_status' => $status,
            ],
            [
                'id'             => ['required', 'integer', 'min:1', Rule::exists($this->coreAdmAccountDao->getTableName())],
                'account_status' => ['required', 'string', Rule::in(AccountStatus::all())],
            ],
            [],
            [
                'id'             => '成员',
                'account_status' => '账号状态',
            ]
        )->validate();

        $this->validateIsClose($id);

        $result = $this->coreAdmAccountDao->update($id, ['account_status' => $status]);

        $this->forceLogoutByAdminId($id);

        return $result;
    }

    /**
     * 验证账号是否失效
     * @param int $id
     * @throws SysPermissionException
     */
    public function validateIsClose(int $id)
    {
        $sysUser = $this->coreAdmAccountDao->findByIdAndCloseAtIsNull($id);

        if (blank($sysUser)) {
            throw new SysPermissionException(100001);
        }
    }

    /**
     * 修改自己的密码
     * @param array $adminInfo
     * @param array $data
     * @return mixed
     * @throws AppException
     * @throws AuthException
     * @throws ValidationException
     */
    public function changePersonalPassword(array $adminInfo, array $data)
    {
        // 数据校验
        validator(
            $data,
            [
                'password'             => ['required'],
                'new_password'         => ['required', 'regex:' . $this->getStoragePasswordPattern()],
                'confirm_new_password' => ['required', 'same:new_password'],
            ],
            [
                'new_password.regex' => '新密码需要同时包含数字和英文字母，且满足8-32个字符',
            ],
            [
                'password'             => '登录密码',
                'confirm_new_password' => '确认新密码',
                'new_password'         => '新密码',
            ]
        )->validate();

        $oldPassword = array_get($data, 'password');

        $adminId = array_get($adminInfo, 'id');

        if (!$this->validatePassword($adminId, $oldPassword)) {
            throw new AuthException(400007);
        }

        $accountNo = (string)array_get($adminInfo, 'account_no', '-1');

        return $this->updatePassword($accountNo, $data);
    }

    /**
     * 更新密码
     * @param string $accountNo
     * @param array $data
     * @return mixed
     * @throws AppException|ValidationException
     */
    public function updatePassword(string $accountNo, array $data)
    {
        validator(
            $data,
            [
                'new_password'         => ['required', 'regex:' . $this->getStoragePasswordPattern()],
                'confirm_new_password' => ['required', 'same:new_password'],
            ],
            [
                'new_password.regex' => '新密码需要同时包含数字和英文字母，且满足8-32个字符',
            ],
            [
                'new_password'         => '新密码',
                'confirm_new_password' => '确认新密码',
            ]
        )->validate();

        /** @var CoreAdmAccount $account */
        $account = $this->coreAdmAccountDao->findByMainNoOrFail($accountNo);
        $id      = $account->id;

        return $this->updatePasswordById($id, $data['new_password']);
    }

    /**
     * 校验用户密码
     * @param int $id
     * @param string $password
     * @return bool
     * @throws AuthException
     */
    public function validatePassword(int $id, string $password): bool
    {
        /* @var CoreAdmAccountAuth $userAuth */
        $userAuth = $this->userAuthDao()->findByAccountId($id);

        if (blank($userAuth)) {
            throw new AuthException(400010);
        }

        return $userAuth->verifyPassword($password);
    }

    /**
     * 登录
     * @param array $data
     * @return string|null
     * @throws AuthException
     * @throws ValidationException
     */
    public function login(array $data): ?string
    {
        validator(
            $data,
            [
                'account'    => ['required', 'string'],
                'password'   => ['required', 'string'],
            ],
            [],
            [
                'account'    => '账号',
                'password'   => '密码',
            ]
        )->validate();

        $loginIp = get_real_ip();

        $loginLog['account'] = $data['account'];
        $loginLog['ip']      = $loginIp;
        $loginLog['action']  = AdminOperation::LOGIN;

        try {

            // 账号不存在
            try {
                /** @var CoreAdmAccount $sysUser */
                $sysUser = $this->coreAdmAccountDao->findByAccountOrFail($data['account']);
            } catch (Exception $exception) {
                throw new AuthException(400004);
            }

            // 不允许登录
            if (!in_array($sysUser->account_status, AccountStatus::getAllowLoginStatus())) {
                throw new AuthException(400006, [], AccountStatus::getMessage($sysUser->account_status));
            }

            // 检查登录密码错误次数
            $this->checkPasswordErrorCount($data['account']);

            $accountAuth = $sysUser->accountAuth;

            // 密码错误
            if (
                !$accountAuth
                || !$accountAuth->verifyPassword($data['password'])
            ) {
                $this->passwordError($data['account']);
            }

            $this->clearPasswordErrorCount($data['account']);

            $sessionId = get_session_id($sysUser->account);

            $userInfo               = $sysUser->toArray();
            $userInfo['login_at']   = get_now();
            $userInfo['login_ip']   = $loginIp;
            $userInfo['session_id'] = $sessionId;
            // 获取密码的最后修改时间
            $userInfo['passwd_last_change_at'] = $accountAuth->last_update_time;
            $userInfo['account_no']     = $sysUser->account_no;

            return management_auth()->login($userInfo);
        } catch (Exception $e) {
            $loginLog['remark'] = $e->getMessage();

            throw $e;
        } finally {
            $this->storeLoginLog($loginLog);
        }
    }

    /**
     * 写登录日志
     * @param array $logData
     */
    private function storeLoginLog(array $logData)
    {
        $logData['request_header'] = app('request')->header();
        $logData['remark']         = $logData['remark'] ?? '登录成功！';

        $this->coreAdmOperationLogDao->store($logData);
    }

    /**
     * 获取成员详情
     *
     * @param int $id
     * @return CoreAdmAccountDao|Model|object
     */
    public function detail(int $id)
    {
        return $this->coreAdmAccountDao->detail($id);
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        management_auth()->logout();
    }

    /**
     * 修改头像
     * @param array $data
     * @param array $payload
     * @return Model
     * @throws AppException
     */
    public function updateAvatar(array $data, array $payload)
    {
        validator(
            $data,
            [
                'avatar_id' => ['required', 'string'],
            ]
        )->validate();

        validator(
            $payload,
            [
                'id' => ['required', 'integer', 'min:1', Rule::exists($this->coreAdmAccountDao->getTableName())],
            ]
        )->validate();

        return $this->coreAdmAccountDao->update(
            $payload['id'],
            array_only($data, ['avatar_id'])
        );
    }

    /**
     * 用户数据访问层
     */
    protected function userAuthDao(): CoreAdmAccountAuthDao
    {
        return $this->coreAdmAccountAuthDao;
    }

    /**
     * 通过成员id强制退出登录
     * @param $userId
     * @param string $logoutPlatform
     */
    public function forceLogoutByAdminId($userId, $logoutPlatform = '')
    {
        management_auth()->logoutByUserId($userId, $logoutPlatform);
    }

    /**
     * 通过成员id强制退出登录
     * @param string $account
     */
    public function forceLogoutByAccount(string $account): void
    {
        $accountUser = $this->coreAdmAccountDao->findByAccountOrFail($account, ['id']);

        $this->forceLogoutByAdminId($accountUser->id);
    }

    /**
     * 编辑插件开关
     *
     * @param string $accountNo
     * @return Model
     * @throws AppException
     */
    public function saveExtensionStatus(string $accountNo)
    {
        /** @var CoreAdmAccount $account */
        $account = $this->coreAdmAccountDao->findByMainNoOrFail($accountNo);

        $status = empty($account->is_enable_extension) ? YesOrNo::YES : YesOrNo::NO;

        return $this->coreAdmAccountDao->update($account->id, [
            'is_enable_extension' => $status
        ]);
    }

    /**
     * 管理员绑定crm用户操作记录
     * @param CoreAdmAccount $coreAdmAccount
     * @param CrmUser $crmUser
     * @param array $adminInfo
     */
    public function storeBindCrmUserLog(
        CoreAdmAccount $coreAdmAccount,
        CrmUser $crmUser,
        array $adminInfo
    ): void {
        $action = BindUserAction::BIND;

        if ($coreAdmAccount->bind_crm_user_no !== $crmUser->user_no) {
            $action = BindUserAction::UNBIND;
        }

        $data = [
            'log_no'             => snow_flake_id(),
            'core_account_no'    => $coreAdmAccount->account_no,
            'core_real_name'     => $coreAdmAccount->real_name,
            'crm_user_no'        => $crmUser->user_no,
            'crm_user_real_name' => $crmUser->real_name,
            'action'             => $action,
            'action_at'          => get_now(),
            'add_admin_id'       => (int)array_get($adminInfo, 'id'),
            'add_admin_name'     => (string)array_get($adminInfo, 'real_name'),
        ];

        $this->coreAdmAccountBindCrmLogDao->store($data);
    }

    /**
     * 绑定crm用户
     * @param string $account
     * @param string $crmUserNo
     * @param array $adminInfo
     * @throws AppException
     */
    public function bindCrmUser(string $account, string $crmUserNo, array $adminInfo): void
    {
        /* @var CoreAdmAccount $coreAdmAccount */
        $coreAdmAccount = $this->coreAdmAccountDao->findByAccount($account, ['id', 'real_name', 'account_no', 'bind_crm_user_no']);

        if (blank($coreAdmAccount)) {
            throw new AppException(110006, [], '成员不存在');
        }

        $crmUser = $this->crmUserDao->findByUserNo($crmUserNo, ['id', 'user_no', 'real_name']);

        $oriBindUser = $coreAdmAccount->bindCrmUser;

        DB::beginTransaction();

        $coreAdmAccount->update([
            'bind_crm_user_no' => (string)$crmUser?->user_no,
        ]);

        if (filled($oriBindUser)) {
            $this->storeBindCrmUserLog($coreAdmAccount, $oriBindUser, $adminInfo);
        }

        // 非必填
        if (filled($crmUser)) {
            $this->storeBindCrmUserLog($coreAdmAccount, $crmUser, $adminInfo);
        }

        DB::commit();
    }

    /**
     * 绑定crm用户
     * @param string $account
     * @param array $adminInfo
     */
    public function unbindCrmUser(string $account, array $adminInfo): void
    {
        /* @var CoreAdmAccount $coreAdmAccount */
        $coreAdmAccount = $this->coreAdmAccountDao->findByAccountOrFail($account, ['id', 'real_name', 'account_no', 'bind_crm_user_no']);

        // 原来的需要解绑
        $oriBindUser = $coreAdmAccount->bindCrmUser;

        DB::beginTransaction();

        $coreAdmAccount->update([
            'bind_crm_user_no' => '',
        ]);

        if (filled($oriBindUser)) {
            $this->storeBindCrmUserLog($coreAdmAccount, $oriBindUser, $adminInfo);
        }

        DB::commit();
    }

    /**
     * 获取管理员密码过期状态
     * @param array $params
     * @param bool $fromDB
     * @return array
     * @throws ValidationException
     */
    public function getAdminPasswordExpireStatus(array $params, bool $fromDB = false): array
    {
        validator($params, [
            'id'                    => 'required|integer',
            'passwd_last_change_at' => 'integer',
        ])->validate();

        // 默认密码状态是正常
        $status = PasswordExpireStatus::NORMAL;

        // 密码过期时间
        $passwordExpire = 0;

        // 密码最后修改时间
        $passwdChangeAt = array_get($params, 'passwd_last_change_at', 0);

        if ($passwdChangeAt > 0) {
            // 指定从数据库查询或者缓存中不存在'admin_passwd_change_at'字段
            if ($fromDB || !array_has($params, 'admin_passwd_change_at')) {
                $accountAuth = $this->coreAdmAccountAuthDao->findByAccountId($params['id'], ['last_update_time']);

                $passwdChangeAt =  array_get($accountAuth, 'last_update_time', 0);
            }

            $passwordExpire = $passwdChangeAt +  config('site.password_life_time') * 86400;

            $diffExpire = $passwordExpire - get_now();

            // 已过期
            if ($diffExpire <= 0) {
                $status = PasswordExpireStatus::EXPIRED;

                $expireDay = (int)round(abs($diffExpire / 86400));
            }
            //  过期时间在xx天内提醒临近过期
            else if ($diffExpire < config('site.password_days_after_expiration') * 86400) {
                $status = PasswordExpireStatus::NEAR_EXPIRATION;
            }
        }

        return [
            'status'     => $status,
            'expire'     => $passwordExpire,
            'expire_day' => $expireDay ?? 0,
        ];
    }

    /**
     * 设置内部管理员是否细分管理特定B端公司
     * @param array $params
     * @return bool
     * @throws AppException
     */
    public function setSysUserManageSpecificCompany(array $params): bool
    {
        validator($params, [
            'sys_user_id'                     => 'required|integer',
            'cfyf_is_manage_specific_company' => ['required', Rule::in(YesOrNo::all())],
            'cfyf_manage_company_nos'         => ['nullable', 'array'],
        ])->validate();

        // 如果不是细分管理，所管辖公司设置为空
        if (YesOrNo::NO === ((int) $params['cfyf_is_manage_specific_company'])) {
            $params['cfyf_manage_company_nos'] = [];
        }

        // 问题修复
        // 开启细分，且没勾选任何B端公司id的时候，前段没有传这个字段，导致管辖公司没有清空
        if (!isset($params['cfyf_manage_company_nos'])) {
            $params['cfyf_manage_company_nos'] = [];
        }

        /** @var coreAdmAccount $coreAdmAccount */
        $coreAdmAccount = $this->coreAdmAccountDao->findOrFail($params['sys_user_id']);

        return $coreAdmAccount->update(array_only($params, ['cfyf_is_manage_specific_company', 'cfyf_manage_company_nos']));
    }

    /**
     * 获取用户登录信息
     * @param $account
     * @param $password
     * @return array
     * @throws AuthException
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function getLoginInfo($account, $password)
    {

        // 账号不存在
        try {
            /** @var CoreAdmAccount $sysUser */
            $sysUser = $this->coreAdmAccountDao->findByAccountOrFail($account, ['id', 'account_status', 'account_no', 'mobile']);
        } catch (Exception $exception) {
            throw new AuthException(400004);
        }

        // 不允许登录
        if (!in_array($sysUser->account_status, AccountStatus::getAllowLoginStatus())) {
            throw new AuthException(400006, [], AccountStatus::getMessage($sysUser->account_status));
        }

        $accountAuth = $sysUser->accountAuth;

        // 密码错误
        if (
            !$accountAuth
            || !$accountAuth->verifyPassword($password)
        ) {
            $this->passwordError($account);
        }

        $this->clearPasswordErrorCount($account);

        return [
            'account_no' => $sysUser->account_no
        ];
    }
}
