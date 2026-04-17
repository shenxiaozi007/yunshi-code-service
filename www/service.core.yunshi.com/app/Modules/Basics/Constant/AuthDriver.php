<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * Class AuthDriver
 * @package App\Modules\Basics\Constant\Common
 */
class AuthDriver extends BaseConstant
{
    /**
     * 核心系统管理端
     * @var string
     */
    const MANAGEMENT = 'jwt-management';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::MANAGEMENT         => 'jwt-management'
        ];
    }

}
