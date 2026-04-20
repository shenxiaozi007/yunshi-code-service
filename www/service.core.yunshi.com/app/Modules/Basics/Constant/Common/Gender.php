<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * 性别常量类
 *
 */
class Gender extends BaseConstant
{
    /** @var string 未知 */
    public const UNKNOWN = 'unknown';

    /** @var string 男 */
    public const MALE = 'male';

    /** @var string 女 */
    public const FEMALE = 'female';

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return [
            self::UNKNOWN => '未知',
            self::MALE    => '男',
            self::FEMALE  => '女',
        ];
    }
}
