<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * @author 秦昊
 */
class WebRouteTag extends BaseConstant
{
    public const AUTH_NEEDLESS  = 'auth_needless';
    public const LOG            = 'log';

    /**
     * @return string[]
     * @author 秦昊
     */
    public static function getNames(): array
    {
        return [
            self::AUTH_NEEDLESS,
            self::LOG,
        ];
    }
}
