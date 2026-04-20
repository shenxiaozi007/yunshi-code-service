<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * Class RolePermissionBatchSetLogType
 * @package App\Kernel\Base\Constant
 */
class RolePermissionBatchSetLogType extends BaseConstant
{
    /**
     * 全量
     */
    public const TOTAL_QUANTITY = 'total_quantity';

    /**
     * @var string 增量
     */
    const INCREMENT = 'increment';

    /**
     * @var string 删除
     */
    const DELETE = 'delete';

    /**
     * @return mixed
     */
    public static function getNames(): array
    {
        return [
            self::TOTAL_QUANTITY => "全量",
            self::INCREMENT      => "增量",
            self::DELETE         => "删除",
        ];
    }
}
