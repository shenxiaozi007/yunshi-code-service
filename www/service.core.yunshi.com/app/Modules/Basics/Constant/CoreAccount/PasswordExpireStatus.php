<?php

namespace App\Modules\Basics\Constant\CoreAccount;

use App\Kernel\Base\BaseConstant;

/**
 * 密码过期状态
 */
class PasswordExpireStatus extends BaseConstant
{

    /** @var string 正常 */
    public const NORMAL = 'normal';

    /** @var string 即将过期 */
    public const NEAR_EXPIRATION = 'near_expiration';

    /** @var string 已过期 */
    public const EXPIRED = 'expired';

    /**
     * @inheritDoc
     */
    public static function getNames(): array
    {
        return [
            self::NORMAL          => '正常',
            self::NEAR_EXPIRATION => '即将过期',
            self::EXPIRED         => '已过期',
        ];
    }
}
