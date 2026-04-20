<?php

namespace App\Modules\Basics\Constant\Sales;

use App\Kernel\Base\BaseConstant;
use App\Modules\Basics\Constant\Rbac\AdminOperation;

/**
 * 管理员状态
 * Class SalesAccountStatus
 * @package App\Modules\Basics\Constant\Sales
 */
class AccountStatus extends BaseConstant
{
    /**
     * 正常
     * @var string
     */
    const ENABLE = 'enable';

    /**
     * 已禁用
     * @var string
     */
    const DISABLE = 'disable';

    /**
     * 已注销
     * @var string
     */
    const CANCEL = 'cancel';

    /**
     * 已离职
     * @var string
     */
    const DIMISSION = 'dimission';

    /**
     * @return mixed
     */
    public static function getNames(): array
    {
        return array(
            self::ENABLE       => '正常',
            self::DISABLE      => '已禁用',
            self::CANCEL       => '已注销',
            self::DIMISSION    => '已离职',
        );
    }

    /**
     * 正常状态
     * @return string[]
     */
    public static function getEnableStatus()
    {
        return [
            self::ENABLE,
        ];
    }

    /**
     * 修改状态允许的状态
     * @return string[]
     */
    public static function statusForModify()
    {
        return [
            self::ENABLE,
            self::DISABLE,
            self::DIMISSION,
        ];
    }

    /**
     * 可以被操作归属保单的状态
     * @return string[]
     */
    public static function getCanTransferPolicyStatus()
    {
        return [
            self::ENABLE,
            self::DISABLE,
        ];
    }

    /**
     * 允许登录的状态
     */
    public static function getAllowLoginStatus()
    {
        return [
            self::ENABLE,
        ];
    }

    /**
     * @param $key
     * @return mixed
     */
    public static function getMessage($key)
    {
        $message = [
            self::DISABLE   => '已禁用',
            self::CANCEL    => '已注销',
        ];

        return sprintf('你的账号%s，无法登录，请联系管理员', array_get($message, $key, '状态异常'));
    }

    /**
     * 需要记录异动日志的类型
     */
    public static function getNeedAddChangeLogStatus()
    {
        return [
            self::DISABLE,
            self::DIMISSION,
        ];
    }

    /**
     * 异动类型 map
     * @return string[]
     */
    public static function getEmployeeChangeActionMap()
    {
        return [
            self::DISABLE      => EmployeeChangeAction::DISABLE,
            self::DIMISSION    => EmployeeChangeAction::DIMISSION,
        ];
    }

    /**
     * 管理员日志操作类型 map
     * @return string[]
     */
    public static function getCoreAdmOperationActionMap()
    {
        return [
            self::DISABLE      => AdminOperation::DISABLE_EMPLOYEE,
            self::DIMISSION    => AdminOperation::DIMISSION_EMPLOYEE,
        ];
    }
}
