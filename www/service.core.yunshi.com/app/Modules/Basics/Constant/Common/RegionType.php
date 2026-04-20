<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * 地区类型
 */
class RegionType extends BaseConstant
{
    /** @var string 省 */
    const PROVINCE = 'province';

    /** @var string 市 */
    const CITY = 'city';

    /** @var string 区 */
    const DISTRICT = 'district';

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return [
            self::PROVINCE => '省',
            self::CITY     => '市',
            self::DISTRICT => '区',
        ];
    }

    /**
     * 获取省市映射枚举
     * @return array
     */
    public static function getProvinceAndCityMaps(): array
    {
        return [
            self::PROVINCE,
            self::CITY,
        ];
    }

}
