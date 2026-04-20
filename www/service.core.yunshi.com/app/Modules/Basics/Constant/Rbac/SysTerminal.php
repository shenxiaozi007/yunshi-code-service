<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * 权限系统使用终端
 * Class SysTerminal
 * @package App\Modules\Basics\Constant\Rbac
 */
class SysTerminal extends BaseConstant
{
    /**
     * 系统使用终端app
     */
    public const SYS_TERMINAL_APP = 'management_app';

    /**
     * 系统使用终端web
     */
    public const SYS_TERMINAL_WEB = 'management_web';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::SYS_TERMINAL_APP      =>      '系统使用终端APP',
            self::SYS_TERMINAL_WEB      =>      '系统使用终端WEB',
        ];
    }
}
