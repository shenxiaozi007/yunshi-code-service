<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 */
class HideDataType extends BaseConstant
{
    /**
     * 身份证号
     */
    public const ID_CARD            = 'identity_card';

    /**
     * 手机号
     */
    public const MOBILE             = 'mobile';

    /**
     * 邮箱
     */
    public const EMAIL              = 'email';

    /**
     * 银行卡号
     */
    public const BANK_CARD          = 'bank_card';

    /**
     * 微信号
     */
    public const WX_ID              = 'wxid';

    /**
     * 微信号
     */
    public const WECHAT_ALIAS              = 'wechat_alias';

    /**
     * 电子保单下载地址
     */
    public const POLICY_FILE_URL    = 'policy_file_url';

    /**
     * 地址
     */
    public const ADDRESS = 'address';

    /**
     * @return array
     * @author 秦昊
     * Date: 2021/7/9 17:41
     */
    public static function getNames(): array
    {
        return [
            self::ID_CARD           => '身份证号',
            self::MOBILE            => '手机号',
            self::EMAIL             => '邮箱',
            self::BANK_CARD         => '银行卡号',
            self::WX_ID             => '微信号',
            self::WECHAT_ALIAS      => '微信号',
            self::POLICY_FILE_URL   => '电子保单下载地址',
            self::ADDRESS           => '地址',
        ];
    }
}
