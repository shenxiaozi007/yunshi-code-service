<?php

namespace App\Modules\Basics\Constant\CrmUser;

use App\Kernel\Base\BaseConstant;

/**
 * 手机号分配状态
 * Class MobileStatus
 * @package App\Modules\Basics\Constant\Sales
 */
class MobileStatus extends BaseConstant
{
    const UNUSED = 'unused';

    const USED = 'used';

    /**
     * @return array|mixed
     */
    public static function getNames(): array
    {
        return [
            self::UNUSED => '未分配',
            self::USED   => '已分配',
        ];
    }

}
