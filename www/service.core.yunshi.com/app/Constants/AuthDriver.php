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

    /** @var string 核心CRM销售 */
    const SALES      = 'jwt-sales';


    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::MANAGEMENT     => 'jwt-management',
            self::SALES          => 'jwt-sales',
        ];
    }
}
