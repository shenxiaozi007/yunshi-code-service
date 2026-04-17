<?php

namespace App\Modules\Basics\Constant\Insurance;

use App\Kernel\Base\BaseConstant;

/**
 * 保留小数方法
 */
class RetainDecimalMethod extends BaseConstant
{
    /** @var string 四舍五入 */
    public const ROUND = 'round';

    /** @var string 进位 */
    public const CEIL = 'ceil';

    /** @var string 退位 */
    public const FLOOR = 'floor';

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return [
            self::ROUND => '四舍五入',
            self::CEIL  => '进位',
            self::FLOOR => '退位'
        ];
    }
}
