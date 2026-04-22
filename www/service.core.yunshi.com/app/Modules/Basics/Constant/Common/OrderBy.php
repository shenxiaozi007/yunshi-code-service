<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * Class OrderBy
 * @package App\Modules\Basics\Constant\Common
 */
class OrderBy extends BaseConstant
{
    /**
     * 升序
     */
    const ASC = 'asc';

    /**
     * 降序
     */
    const DESC = 'desc';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::ASC   => '升序',
            self::DESC  => '降序',
        ];
    }
}
