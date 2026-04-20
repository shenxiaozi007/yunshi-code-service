<?php

namespace App\Modules\Basics\Constant\Company;

use App\Kernel\Base\BaseConstant;

/**
 * Class DepartmentType
 * @package App\Modules\Basics\Constant\Company
 */
class DepartmentStatus extends BaseConstant
{
    const NORMAL = 'normal';

    const DISBAND = 'disband';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::NORMAL  => '正常',
            self::DISBAND => '解散',
        ];
    }

    /**
     * @param string $departmentStatus
     * @return bool
     */
    public static function isDisband(string $departmentStatus)
    {
        return self::DISBAND === $departmentStatus;
    }
}
