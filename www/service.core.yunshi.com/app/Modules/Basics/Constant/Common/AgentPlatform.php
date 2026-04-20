<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 * Class AgentPlatform
 * @package App\Kernel\Base\Constant
 */
class AgentPlatform extends BaseConstant
{
    /**
     * @var
     */
    public const CRM = 'crm';

    /**
     * 未知
     */
    public const UNKNOWN   = 'unknown';

    /**
     * @return string[]
     */
    public static function getNames(): array
    {
        return [
            self::CRM          => 'CRM',
            self::UNKNOWN      => '未知',
        ];
    }

}
