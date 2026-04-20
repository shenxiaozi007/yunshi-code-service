<?php

namespace App\Modules\Basics\Constant\Company;

use App\Kernel\Base\BaseConstant;

/**
 * Class DepartmentType
 * @package App\Modules\Basics\Constant\Company
 */
class DepartmentType extends BaseConstant
{
    /**
     * 销售
     */
    const SALES  = 'sales';

    /**
     * 内勤
     */
    const INSIDE_JOB  = 'inside_job';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::SALES         => '销售',
            self::INSIDE_JOB    => '内勤',
        ];
    }
}
