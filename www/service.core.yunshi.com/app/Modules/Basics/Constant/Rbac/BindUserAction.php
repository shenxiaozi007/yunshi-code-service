<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * 绑定crm用户操作记录枚举
 * Class BindUserAction
 * @package App\Modules\Basics\Constant\Rbac
 */
class BindUserAction extends BaseConstant
{

    /**
     * 绑定
     */
    const BIND = 'bind';

    /**
     * 解绑
     */
    const UNBIND = 'unbind';

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return [
            self::BIND   => '绑定',
            self::UNBIND => '解绑',
        ];
    }
}
