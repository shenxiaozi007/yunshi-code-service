<?php

namespace App\Modules\Management\Business\CrmRbac;

use App\Exceptions\Common\ApiException;
use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Exceptions\Common\RuntimeException;
use App\Exceptions\Management\CrmUserException;
use App\Kernel\Base\BaseDao;
use App\Kernel\Traits\PasswordTrait;
use App\Libraries\Encryption\Dictionary;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Common\AgentPlatform;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\CrmUser\MobileStatus;
use App\Modules\Basics\Constant\Rbac\AdminOperation;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Dao\Crm\CrmUserAuthDao;
use App\Modules\Basics\Dao\Crm\CrmAdmRoleDao;
use App\Modules\Basics\Dao\Crm\CrmUserDao;
use App\Modules\Basics\Dao\Crm\CrmUserMobileDao;
use App\Modules\Basics\Model\Company\CrmUserPosition;
use App\Modules\Basics\Model\CrmPermission\CrmUser;
use App\Modules\Management\Dao\CorePermission\CoreAdmOperationLogDao;
use App\Modules\Management\Dao\Crm\CrmDepartmentDao;
use App\Modules\Management\Trait\Log\CoreAdmOperationLogTrait;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use App\Modules\Basics\Constant\Common\AuthDriver;
use App\Modules\Basics\Dao\Crm\CrmUserPositionDao;
use App\Modules\Basics\Dao\Sales\CoreSalesDao;

class CrmUserBusiness extends BaseBusiness
{
    use PasswordTrait;
    use CoreAdmOperationLogTrait;

    /**
     * 初始化CRM账户创建密码
     * @var string
     */
    private $password;

    /**
     * CoreAccountBusiness constructor.
     *
     * @param CrmUserDao $crmUserDao
     * @param CrmUserAuthDao $crmUserAuthDao
     * @param CrmAdmRoleDao $crmAdmRoleDao
     * @param CrmUserPositionDao $crmUserPositionDao
     * @param CrmDepartmentDao $crmDepartmentDao
     * @param CoreAdmOperationLogDao $coreAdmOperationLogDao
     * @param CoreSalesDao $coreSalesDao
     * @param CrmUserMobileDao $crmUserMobileDao
     */
    public function __construct(
        protected CrmUserDao $crmUserDao,
        protected CrmUserAuthDao $crmUserAuthDao,
        protected CrmAdmRoleDao $crmAdmRoleDao,
        protected CrmUserPositionDao $crmUserPositionDao,
        protected CoreAdmOperationLogDao $coreAdmOperationLogDao,
        protected CoreSalesDao $coreSalesDao,
        protected CrmUserMobileDao $crmUserMobileDao,
    )
    {
    }

    /**
     * 存储
     * @param array $payload
     * @param array $adminInfo
     * @return mixed
     * @throws ApiException
     * @throws AppException
     * @throws AuthException
     * @throws CrmUserException
     * @throws RuntimeException
     * @throws ValidationException
     */
    public function store(array $payload, array $adminInfo)
    {
        // 数据校验
        validator($payload, [
            'real_name'                   => ['required', 'string', 'max:64'],
            'job_sn'                      => ['required', 'string', 'max:64'],
            'mobile'                      => ['required', 'mobile'],
            'certificate_number'          => ['required', 'id_card'],
            'register_at'                 => ['required', 'integer'],
            'detail'                      => ['required'],
            'wxid'                        => ['string'],
            'position_id'                 => ['integer'],
            'account'                     => ['nullable', 'min:5', 'username'],
        ], [
            'account.min'      => ':attribute 只能包含字母或数字且不少于5位字符',
        ], [
            'real_name'                   => '员工姓名',
            'job_sn'                      => '员工工号',
            'mobile'                      => '员工手机号',
            'certificate_number'          => '员工身份证号码',
            'register_at'                 => '入职时间',
            'position_id'                 => '销售职位',
            'account'                     => '账户',
            'wxid'                        => '微信号',
        ])->validate();

        $this->validateMobileAndAccountAndJobSn($payload);

        $userInfo = app('db')->transaction(function () use ($payload, $adminInfo)
        {
            // 映射用户入库数据
            $data = $this->mapCrmUserData($payload, $adminInfo);

            /** @var CrmUser $userInfo */
            $userInfo = $this->crmUserDao->store($data);

            // account账户为非必填，所以填写的时候才生成
            $this->createAccount($userInfo);

            $this->updateCoreSales($userInfo->id);

            $this->updateCrmUserMobile($userInfo->id, $userInfo->mobile, '');

            // 绑定手机号需要记录日志
            $userInfo->userMobileBindLogs()->updateOrCreate([
                'mobile'          => $userInfo->mobile,
                'core_admin_id'   => $adminInfo['add_admin_id'],
                'core_admin_name' => $adminInfo['add_admin_name'],
            ]);

            // 添加部门成员记录
            // $this->storeUserCoreHeadquartersDepartment($userInfo, [
            //     'id'        => $adminInfo['add_admin_id'],
            //     'real_name' => $adminInfo['add_admin_name'],
            // ]);

            // 操作记录
            $this->addCoreAdmOperationLog(management_auth_info('account'), AdminOperation::CREATE_EMPLOYEE);

            return $userInfo;
        });

        return $userInfo;
    }

    /**
     * 映射用户数据
     * @param array $payload
     * @param array $adminInfo
     * @return array
     * @throws AppException
     */
    private function mapCrmUserData(array $payload, array $adminInfo): array
    {

        /** @var CrmUserPosition $positionInfo */
        $positionInfo = null;

        if (filled($positionId = array_get($payload, 'position_id')))
        {
            $positionInfo = $this->crmUserPositionDao->findOrFail($positionId, ['id', 'position_grade']);
        }

        $certificateNumber = array_get($payload, 'certificate_number') ?: '';
        $cardInfo          = recognize_id_card($certificateNumber);

        return array_merge([
            'user_no'                        => snow_flake_id(),
            'real_name'                      => array_get($payload, 'real_name') ?: '',
            'job_sn'                         => array_get($payload, 'job_sn') ?: '',
            'mobile'                         => array_get($payload, 'mobile') ?: '',
            'certificate_number'             => $certificateNumber,
            'birthday'                       => $cardInfo['birthday'] ?? 0,
            'gender'                         => $cardInfo['gender'] ?? '',
            'register_at'                    => array_get($payload, 'register_at') ?: 0,
            'account'                        => array_get($payload, 'account') ?: '',
            'department_no'                  => array_get($payload, 'department_no') ?: '',
            'position_id'                    => $positionInfo->id ?? 0,
            'position_grade'                 => $positionInfo->position_grade ?? 0,
            'avatar_id'                      => array_get($payload, 'avatar_id') ?: '',
            'account_status'                 => AccountStatus::ENABLE,
            'open_at'                        => get_now(),
        ], $adminInfo);
    }

    /**
     * 成员列表
     * @param array $data
     * @return Collection
     * @throws AppException
     * @throws ValidationException
     */
    public function getPageList(array $data)
    {
        // 验证搜索参数
        $this->validateSearchParam($data);

        /** @var Collection $list */
        $list = $this->crmUserDao->getPageList($data);

        $list->load(
            [
                'crmUserDetail:crm_user_id,base_salary',
                'role:id,name,role_no',
                'position:id,name',
                'department:department_no,name',
            ]
        );

        return $list;
    }

    /**
     * 成员列表
     *
     * @param array $payload
     * @return Builder[]|Collection
     * @throws AppException|ValidationException
     */
    public function selectList(array $payload)
    {
        // 数据校验
        validator(
            $payload, [
            'real_name_like'      => ['string'],
            'account_status'      => ['string', Rule::in(AccountStatus::all())],
            'position_grade_lt'   => 'nullable',
        ], [], [
            'real_name_like'      => '员工姓名',
            'account_status'      => '账号状态',
            'identity'            => '员工身份',
            'position_grade_lt'   => '职位等级',
        ])->validate();

        $columns = [
            'id', 'user_no', 'sales_no', 'real_name', 'account', 'job_sn', 'company_id', 'department_no',
            'position_grade', 'position_id', 'gender', 'certificate_number', 'mobile', 'birthday', 'customer_service_no',
        ];

        $relations = [
            'headquartersCompany:id,name',
            'position:id,name',
        ];

        $payload['order_by'] = ['id,desc'];

        $list = $this->crmUserDao->getList($payload, $columns, $relations);

        return $list;
    }

    /**
     * 更新
     * @param string $userNo
     * @param array $data
     * @param array $adminInfo
     * @return bool
     * @throws AppException
     * @throws ValidationException
     * @throws CrmUserException
     */
    public function update(string $userNo, array $data, array $adminInfo)
    {
        // 数据校验
        validator(
            $data, [
            'mobile'                      => ['required', 'mobile'],
            'email'                       => ['email'],
            'register_at'                 => ['required', 'integer'],
            'position_id'                 => [Rule::exists($this->crmUserPositionDao->getTableName(), 'id')],
            'account'                     => ['nullable', 'min:5', 'username'],
            'wxid'                        => ['string'],
        ], [], [
            'mobile'                      => '手机号码',
            'email'                       => '邮箱',
            'register_at'                 => '入职日期',
            'account'                     => 'CRM账户',
            'wxid'                        => '微信号',
        ])->validate();

        $this->validateMobileAndAccountAndJobSn($data, $userNo);

        /** @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByMainNoOrFail($userNo);

        $oriAccount = $userInfo->account;

        $userInfo = app('db')->transaction(function () use ($data, $adminInfo, $oriAccount, $userInfo)
        {
            // crm用户已经有了账户不做变更
            if (filled($userInfo->account))
            {
                array_forget($data, 'account');
            }

            // 获取销售职位
            if (filled($positionId = array_get($data, 'position_id')))
            {
                /** @var CrmUserPosition $positionInfo */
                $positionInfo = $this->crmUserPositionDao->findOrFail($positionId, ['id', 'position_grade']);

                // 保存销售职位信息
                $data['position_grade'] = $positionInfo->position_grade;
            }

            $coreAdmAccount = array_pull($adminInfo, 'account');

            // 合并管理员信息
            $data = array_merge($data, $adminInfo);

            // 新增后不可修改身份证号码
            array_forget($data, 'certificate_number');

            // 先取出原手机号
            $oriMobile       = $userInfo->mobile;

            // 更新员工信息
            $userInfo->update($data);

            // 更新core_sales表信息
            $this->updateCoreSales($userInfo->id);

            // 更新员工的时候，本身不存在account，并且参数有账户时创建CRM账户
            if (blank($oriAccount) && filled($userInfo->account))
            {
                $this->createAccount($userInfo);
            }

            // 手机号进行了变更
            $this->updateCrmUserMobile(
                $userInfo->id,
                $userInfo->mobile,
                $oriMobile
            );

            // 手机号进行了变更
            if ($oriMobile !== $userInfo->mobile)
            {
                // 绑定手机号需要记录日志
                $userInfo->userMobileBindLogs()->updateOrCreate([
                    'mobile'          => $userInfo->mobile,
                    'core_admin_id'   => $adminInfo['edit_admin_id'],
                    'core_admin_name' => $adminInfo['edit_admin_name'],
                ]);
            }

            $this->addCoreAdmOperationLog($coreAdmAccount, AdminOperation::UPDATE_EMPLOYEE);

            return $userInfo;
        });

        return $userInfo;
    }

    /**
     * 离职
     * @param string $userNo
     * @param array $payload
     * @param array $adminInfo
     * @return void
     * @throws AppException
     * @throws AuthException
     * @throws ValidationException
     */
    public function dimission(string $userNo, array $payload, array $adminInfo): void
    {
        $data = validator(
            $payload, [
            'resignation_at' => ['required', 'integer', 'gt:0'],
        ], [], [
            'resignation_at' => '离职时间',
        ])->validate();

        /** @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByUserNo($userNo);

        if (blank($userInfo))
        {
            throw new AppException(100003, [], '员工不存在');
        }

        // 已经是离职状态
        if ($userInfo->isDimission())
        {
            throw new AuthException(400013);
        }

        if ($userInfo->id === 1)
        {
            throw new AuthException(400009);
        }

        // 用来存储下面的异常状态，统一抛出
        $errors = [];

        // 校验的异常错误，一块抛出
        if (filled($errors))
        {
            throw new AppException(100003, [], implode(',', $errors));
        }

        DB::transaction(function () use ($userInfo, $data, $adminInfo)
        {
            $oldMobile = $userInfo->mobile;

            $userInfo->update(
                [
                    'resignation_at'              => array_get($data, 'resignation_at'),
                    'account_status'              => AccountStatus::DIMISSION,
                    'mobile'                      => '',
                    'edit_admin_id'               => $adminInfo['id'],
                    'edit_admin_name'             => $adminInfo['real_name'],
                    'adviser_is_receive_customer' => YesOrNo::NO,
                    'expert_is_receive_customer'  => YesOrNo::NO,
                    'adviser_is_online_at'        => time(),
                    'adviser_is_online'           => YesOrNo::NO,
                ]
            );

            // 更新core_sales表的数据
            $this->updateCoreSales($userInfo->id);

            // 若销售已经绑定了微信，则解除绑定
            if ($userInfo->salesWechatUser)
            {
                $userInfo->salesWechatUser->delete();
            }

            // 离职更新手机号状态,解除分配
            $this->updateCrmUserMobile(
                $userInfo->id,
                ''
                , $oldMobile
            );

        });

        $this->forceLogoutByCrmUserId($userInfo->id);
    }

    /**
     * 验证账号是否失效
     * @param int $id
     * @throws CrmUserException|AppException
     */
    public function validateIsClose(int $id)
    {
        $count = $this->crmUserDao->countByIdAndCloseAtIsZero($id);

        if (!$count)
        {
            throw new CrmUserException(100001);
        }
    }

    /**
     * 更新密码
     * @param string $account
     * @param array $data
     * @param array $adminInfo
     * @return bool
     * @throws AppException
     * @throws ValidationException
     */
    public function updatePassword(string $account, array $data, array $adminInfo): bool
    {
        validator(
            $data, [
            'new_password'         => ['required', 'regex:' . $this->getStoragePasswordPattern()],
            'confirm_new_password' => ['required', 'same:new_password'],
        ], [
            'new_password.regex' => '新密码需要同时包含数字和英文字母，且满足8-32个字符',
        ], [
                'new_password'         => '新密码',
                'confirm_new_password' => '确认新密码',
            ]
        )->validate();

        /** @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByAccountOrFail($account);
        $id       = $userInfo->id;

        $result = $this->updatePasswordById($id, $data['new_password']);

        // 操作记录
        $this->addCoreAdmOperationLog($adminInfo['account'], AdminOperation::RESET_EMPLOYEE_PASSWORD);

        $this->forceLogoutByCrmUserId($id);

        return $result;
    }

    /**
     * 获取成员详情
     *
     * @param string $userNo
     * @return Builder|Model|object|null
     * @throws AppException
     */
    public function detail(string $userNo)
    {
        $relations = [
            'role:id,role_no,name,remark',
            'headquartersCompany:id,company_no,name',
            'contractFile:id,crm_user_id,file_id,file_name,contract_start_at,contract_end_at,contract_is_long_term,add_time',
            'department:department_no,name',
            'ascriptionUser:user_no,real_name',
            'position:id,name',
        ];

        return $this->crmUserDao->findByMainNoOrFail($userNo, relations: $relations);
    }

    /**
     * 获取auth表与crm_user的关联字段
     * @return string
     */
    protected function userAuthRelationColumn(): string
    {
        return 'crm_user_id';
    }

    /**
     * 用户数据访问层
     */
    protected function userAuthDao(): BaseDao
    {
        return $this->crmUserAuthDao;
    }

    /**
     * 修改员工角色
     * @param string $userNo
     * @param array $data
     * @return bool|int
     * @throws AppException
     * @throws CrmUserException
     * @throws ValidationException
     */
    public function updateRole(string $userNo, array $data)
    {
        validator(
            $data, [
            'role_no'  => ['required', 'string'],
        ], [], [
                'role_no'  => 'crm角色',
            ]
        )->validate();

        $userInfo = $this->crmUserDao->findByMainNoOrFail($userNo);

        $roleNo = array_get($data, 'role_no', '');

        $roleInfo = $this->crmAdmRoleDao->findByMainNoOrFail($roleNo, ['id']);

        return $userInfo->update([
            'adm_role_id' => $roleInfo->id,
        ]);
    }

    /**
     * 生成模拟登录鉴权链接
     * @param string $userNo
     * @param array $authInfo
     * @return string
     * @throws AppException
     */
    public function generateAuthLink(string $userNo, array $authInfo = [])
    {
        /** @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByMainNoOrFail($userNo, ['user_no', 'account', 'job_sn',]);

        $token = str_random(32);

        $cacheData = [
            'user_no'  => $userInfo->user_no,
            'operator' => $authInfo,
        ];

        // token过期时间
        $expireTime = (int)config('site.core_crm_simulate_login_token_expire_time');

        // 模拟授权也是使用这个DB8
        $redis = Redis::connection(AuthDriver::SALES);

        $redis->setex($token, $expireTime, json_encode($cacheData, JSON_UNESCAPED_UNICODE));

        $params = [
            '_ts'         => get_now(),
            '_rd'         => random_int(1000000, 9999999),
            '_terminal'   => config('service.name'),
            'login_token' => $token,
        ];

        // 这里是去crm做鉴权所以需要用crm的service_key加密
        $params['_sign'] = app(Dictionary::class)->encrypt($params, config('api.crm.sign_key'));

        $adminUserName = array_get($authInfo, 'real_name', '');
        $adminId       = array_get($authInfo, 'id', 0);
        $adminAccount  = (string)array_get($authInfo, 'account', '');

        $remark = "被管理员： {$adminUserName}(id:{$adminId}) 模拟登录了";
        $this->addCoreAdmOperationLog($adminAccount, AdminOperation::SIMULATE_LOGIN, $remark);

        return 'http://' . $userInfo->job_sn . '-' . config('domain.crm_web_simulate') . '/#/login?' . http_build_query($params);
    }

    /**
     * @param string $userNo
     * @param array $authInfo
     * @return string
     * @throws AppException
     */
    public function generateVirtuallyAuthLink(string $userNo, array $authInfo = [])
    {
        /** @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByMainNoOrFail($userNo, ['user_no', 'account', 'job_sn',]);

        $token = str_random(32);

        $cacheData = [
            'user_no'  => $userInfo->user_no,
            'operator' => $authInfo,
        ];

        // token过期时间
        $expireTime = (int)config('site.core_crm_simulate_login_token_expire_time');

        // 模拟授权也是使用这个DB8
        $redis = Redis::connection(AuthDriver::SALES);

        $redis->setex($token, $expireTime, json_encode($cacheData, JSON_UNESCAPED_UNICODE));

        $params = [
            '_ts'         => get_now(),
            '_rd'         => random_int(1000000, 9999999),
            '_terminal'   => config('service.name'),
            'login_token' => $token,
        ];

        // 这里是去crm做鉴权所以需要用crm的service_key加密
        $params['_sign'] = app(Dictionary::class)->encrypt($params, config('api.crm.sign_key'));

        $adminUserName = array_get($authInfo, 'real_name', '');
        $adminId       = array_get($authInfo, 'id', 0);
        $adminAccount  = (string)array_get($authInfo, 'account', '');

        $remark = "被管理员： {$adminUserName}(id:{$adminId}) 模拟登录了";
        $this->addCoreAdmOperationLog($adminAccount, AdminOperation::SIMULATE_LOGIN, $remark);

        return 'http://' . config('domain.crm_management_web_client') . '/#/login?' . http_build_query($params);
    }

    /**
     * 验证搜索参数
     * @param array $data
     * @return void
     * @throws ValidationException
     */
    private function validateSearchParam(array $data)
    {
        // 数据校验
        validator(
            $data, [
            'real_name_like'       => ['string'],
            'job_sn'               => ['string'],
            'account_status'       => ['array', Rule::in(AccountStatus::all())],
            'department_no'        => ['array'],
            'role_no'              => ['nullable', 'array'],
            'role_no.*'            => ['string'],
            'mobile'               => ['mobile'],
            'register_at_start'    => ['integer'],
            'register_at_end'      => ['required_with:register_at_start', 'integer', 'gte:register_at_start'],
            'resignation_at_start' => ['integer'],
            'resignation_at_end'   => ['required_with:resignation_at_start', 'integer', 'gte:resignation_at_start'],
        ], [
            'register_at_end.gte'    => '入职日期止期必须大于等于起期',
            'resignation_at_end.gte' => '离职日期止期必须大于等于起期',
        ], [
            'real_name_like'       => '员工姓名',
            'job_sn'               => '工号',
            'account_status'       => '账号状态',
            'department_no'        => '所在部门',
            'role_no'              => '员工角色',
            'mobile'               => '手机号码',
            'register_at_start'    => '入职日期起期',
            'register_at_end'      => '入职日期止期',
            'resignation_at_start' => '离职日期止期',
            'resignation_at_end'   => '离职日期止期',
        ])->validate();
    }

    /**
     * 更新用户的手机号
     * @param int $crmUserId
     * @param string $newMobile
     * @param string $oriMobile
     * @throws AppException
     */
    protected function updateCrmUserMobile(
        int $crmUserId,
        string $newMobile = '',
        string $oriMobile = '',
    ): void
    {
        /* @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findOrFail($crmUserId, ['mobile', 'user_no', 'id']);

        // 手机号进行了变更
        if (filled($oriMobile))
        {
            /* @var CrmUserMobile $oriUserMobile */
            $oriUserMobile = $this->crmUserMobileDao->findByMobileOrFail($oriMobile, ['id']);

            $oriUserMobile->update([
                'user_no' => '',
                'status'  => MobileStatus::UNUSED,
            ]);
        }

        if (filled($newMobile))
        {
            /* @var CrmUserMobile $newUserMobile */
            $newUserMobile = $this->crmUserMobileDao->findByMobileOrFail($userInfo->mobile, ['id']);

            $newUserMobile->update([
                'user_no' => $userInfo->user_no,
                'status'  => MobileStatus::USED,
            ]);
        }
    }

    /**
     * 更改员工状态
     * @param string $userNo
     * @param string $accountStatus
     * @param $adminInfo
     * @throws AppException
     */
    public function modifyStatus(string $userNo, string $accountStatus, $adminInfo): void
    {
        /* @var CrmUser $crmUser */
        $crmUser = $this->crmUserDao->findByUserNo($userNo, ['id', 'account_status']);

        if (blank($crmUser))
        {
            throw new AppException(110006, [], '员工编码不存在');
        }

        DB::beginTransaction();

        $crmUser->update([
            'account_status' => $accountStatus,
        ]);

        $adminOperationAction = AdminOperation::ENABLE_EMPLOYEE;

        if ($accountStatus === AccountStatus::DISABLE)
        {
            $adminOperationAction = AdminOperation::DISABLE_EMPLOYEE;
        }

        $this->addCoreAdmOperationLog($adminInfo['account'], $adminOperationAction);

        DB::commit();

        $this->forceLogoutByCrmUserId($crmUser->id);
    }

    /**
     * 通过员工编码强制退出登录
     *
     * @param string $userNo
     * @param string $logoutPlatform
     * @throws AppException
     */
    public function forceLogoutByUserNo(string $userNo, string $logoutPlatform = ''): void
    {
        /* @var CrmUser $crmUser */
        $crmUser = $this->crmUserDao->findByUserNo($userNo, ['id', 'account_status']);

        if (blank($crmUser))
        {
            throw new AppException(110006, [], '员工编码不存在');
        }

        $this->forceLogoutByCrmUserId($crmUser->id, $logoutPlatform);
    }

    /**
     * 创建CRM账户
     * account账户为非必填，所以填写的时候才生成
     * @param CrmUser $crmUser
     */
    public function createAccount(CrmUser $crmUser): void
    {
        if (blank($crmUser->account))
        {
            return;
        }

        $this->password = str_random(8);

        $this->updatePasswordById($crmUser->id, $this->password);
    }

    /**
     * 添加部门成员记录
     * @param CrmUser $user
     * @param array $adminInfo
     */
    // protected function storeUserCoreHeadquartersDepartment(CrmUser $user, array $adminInfo)
    // {
    //     if (blank($user->department_no))
    //     {
    //         return;
    //     }

    //     $data = [
    //         'relation_no'          => snow_flake_id(),
    //         'user_no'              => $user->user_no,
    //         'department_no'        => $user->department_no,
    //         'join_date'            => date('Ymd'),
    //         'created_admin_id'     => $adminInfo['id'],
    //         'created_admin_name'   => $adminInfo['real_name'],
    //         'last_edit_admin_id'   => $adminInfo['id'],
    //         'last_edit_admin_name' => $adminInfo['real_name'],
    //     ];

    //     $this->crmUserCoreHeadquartersDepartmentDao->store($data);
    // }

    /**
     * 变更部门成员记录
     * @param string $oriDepartmentNo
     * @param CrmUser $user
     * @param array $adminInfo
     */
    // protected function changeUserCoreHeadquartersDepartment(string $oriDepartmentNo, CrmUser $user, array $adminInfo)
    // {
    //     $authInfo = [
    //         'id'        => $adminInfo['edit_admin_id'],
    //         'real_name' => $adminInfo['edit_admin_name'],
    //     ];

    //     // 变更部门
    //     if (filled($oriDepartmentNo) && $user->department_no !== $oriDepartmentNo)
    //     {
    //         $userCoreHeadquartersDepartment = $this->crmUserCoreHeadquartersDepartmentDao->findByParams([
    //             'department_no'   => $oriDepartmentNo,
    //             'user_no'         => $user->user_no,
    //             'leave_date_zero' => YesOrNo::YES,
    //         ], ['id']);

    //         $data = [
    //             'last_edit_admin_id'   => $authInfo['id'],
    //             'last_edit_admin_name' => $authInfo['real_name'],
    //             'leave_date'           => date('Ymd'),
    //         ];

    //         $userCoreHeadquartersDepartment?->update($data);

    //         $this->storeUserCoreHeadquartersDepartment($user, $authInfo);
    //     }
    // }

    /**
     * 根据crm 更新core_sales信息
     * @param int $crmUserId
     */
    public function updateCoreSales(int $crmUserId): void
    {
        /* @var CrmUser $user */
        $user = $this->crmUserDao->find($crmUserId);

        if (blank($user))
        {
            return;
        }

        // 创建一条对应的销售信息
        $coreSalesData = [
            'sales_source'   => AgentPlatform::CRM,
            'job_sn'         => (string)$user->job_sn,
            'real_name'      => (string)$user->real_name,
            'mobile'         => (string)$user->mobile,
            'nickname'       => (string)$user->nickname,
            'avatar_id'      => (string)$user->avatar_id,
            'gender'         => (string)$user->gender,
            'account_status' => (string)$user->account_status,
        ];

        if (blank($user->coreSales))
        {
            $coreSalesData['sales_no'] = snow_flake_id();

            $coreSales = $this->coreSalesDao->store($coreSalesData);

            // 用户关联销售
            $user->update([
                'sales_id' => $coreSales->id,
                'sales_no' => $coreSales->sales_no,
            ]);

            return;
        }

        $user->coreSales->update($coreSalesData);
    }

    /**
     * 校验手机号或者账号或者工号
     * @param array $payload
     * @param string $userNo
     * @throws AppException
     * @throws CrmUserException
     */
    protected function validateMobileAndAccountAndJobSn(array $payload, string $userNo = ''): void
    {
        // 校验手机号
        if (filled($mobile = array_get($payload, 'mobile')))
        {
            $existsMobile = $this->crmUserDao->findByMobile($mobile, ['id', 'user_no']);

            // 新增校验
            if (filled($existsMobile) && blank($userNo))
            {
                throw new CrmUserException(100041);
            }

            // 修改校验
            if (filled($existsMobile) && filled($userNo) && $userNo !== $existsMobile->user_no)
            {
                throw new CrmUserException(100041);
            }
        }

        // 校验账号
        if (filled($account = array_get($payload, 'account')))
        {
            $existsAccount = $this->crmUserDao->findByAccount($account, ['id', 'user_no']);

            // 修改校验
            if (filled($existsAccount) && filled($userNo) && $userNo !== $existsAccount->user_no)
            {
                throw new CrmUserException(100042);
            }

            // 新增校验
            if (filled($existsAccount) && blank($userNo))
            {
                throw new CrmUserException(100042);
            }
        }

        // 校验工号
        if (filled($jobSn = array_get($payload, 'job_sn')))
        {
            $existsJobNo = $this->crmUserDao->findByJobSnOrFailed($jobSn, ['id', 'user_no']);

            // 修改校验
            if (filled($existsJobNo) && filled($userNo) && $userNo !== $existsJobNo->user_no)
            {
                throw new CrmUserException(100043);
            }

            // 新增校验
            if (filled($existsJobNo) && blank($userNo))
            {
                throw new CrmUserException(100043);
            }
        }
    }

      /**
     * 强制员工退出登录
     * @param int $crmUserId
     * @param string $platform
     */
    protected function forceLogoutByCrmUserId(int $crmUserId, $platform = ''): void
    {
        try
        {
            # 后续补上。
            // $this->crmApi->forceLogout($crmUserId, $platform);
        }
        catch (Exception $e)
        {
            info('强制crm员工退出登录失败：');
            info($e->getMessage());
        }
    }
}
