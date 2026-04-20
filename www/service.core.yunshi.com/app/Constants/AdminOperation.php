<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * @author 秦昊
 * Date: 2021/8/31 16:35
 */
class AdminOperation extends BaseConstant
{

    /**
     * 登录
     */
    const LOGIN = 'login';

    /**
     * 模拟登录
     */
    const SIMULATE_LOGIN = 'simulate_login';

    /**
     * 新建员工
     */
    const CREATE_EMPLOYEE = 'create_employee';

    /**
     * 编辑员工
     */
    const UPDATE_EMPLOYEE = 'update_employee';

    /**
     * 离职员工
     */
    const DIMISSION_EMPLOYEE = 'dimission_employee';

    /**
     * 禁用员工
     */
    const DISABLE_EMPLOYEE = 'disable_employee';

    /**
     * 启用员工
     */
    const ENABLE_EMPLOYEE = 'enable_employee';

    /**
     * 重置员工密码
     */
    const RESET_EMPLOYEE_PASSWORD = 'reset_employee_password';

    /**
     * @return array|mixed
     */
    public static function getNames(): array
    {
        return [
            self::LOGIN                         => '登录',
            self::SIMULATE_LOGIN                => '模拟登录',
            self::CREATE_EMPLOYEE               => '新建员工',
            self::UPDATE_EMPLOYEE               => '编辑员工',
            self::DIMISSION_EMPLOYEE            => '离职员工',
            self::DISABLE_EMPLOYEE              => '禁用员工',
            self::ENABLE_EMPLOYEE               => '启用员工',
            self::RESET_EMPLOYEE_PASSWORD       => '重置员工密码',
        ];
    }
}
