<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * Class YesOrNo
 * @package App\Modules\Basics\Constant\Common
 */
class YesOrNo extends BaseConstant
{
    /**
     * 否
     */
    public const NO = 0;

    /**
     * 是
     */
    public const YES = 1;

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::NO  => '否',
            self::YES => '是',
        ];
    }

}
