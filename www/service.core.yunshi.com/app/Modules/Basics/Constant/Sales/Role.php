<?php

namespace App\Modules\Basics\Constant\Sales;

use App\Kernel\Base\BaseConstant;

/**
 * 角色
 *
 * @author 秦昊
 */
class Role extends BaseConstant
{
    /**
     * 管理员
     */
    const ADMINISTRATOR = 'administrator';

    /**
     * 销售
     */
    const SALES = 'sales';

    /**
     * @return string[]
     * @author 秦昊
     */
    public static function getNames(): array
    {
        return [
            self::ADMINISTRATOR => '管理员',
            self::SALES         => '销售',
        ];
    }
}
