<?php

namespace App\Modules\Basics\Constant\Common;

use App\Kernel\Base\BaseConstant;

/**
 */
class HideDataAttr extends BaseConstant
{
    /**
     * 身份证号
     */
    public const ID_CARD                = 'identity_card';

    /**
     * 微信号
     */
    public const WECHAT_ALIAS                = 'wechat_alias';

    /**
     * 证件号
     */
    public const CERTIFICATES_NUMBER    = 'certificates_number';

    /**
     * 证件号
     */
    public const CERTIFICATE_NUMBER    = 'certificate_number';

    /**
     * 手机号
     */
    public const MOBILE                 = 'mobile';

    /**
     * 手机号
     */
    public const PHONE                 = 'phone';

    /**
     * 手机号
     */
    public const HOLDER_MOBILE          = 'holder_mobile';

    /**
     * 银行卡号
     */
    public const ACCOUNT_BANK_NUMBER    = 'account_bank_number';

    /**
     * 邮箱
     */
    public const EMAIL                  = 'email';

    /**
     * 银行卡号
     */
    public const PAYMENT_ACCOUNT        = 'payment_account';

    /**
     * 银行账号
     */
    public const BANK_ACCOUNT           = 'bank_account';

    /**
     * 银行卡号
     */
    public const CARD_NUMBER            = 'card_number';

    /**
     * 微信号
     */
    public const WX_ID                  = 'wxid';

    /**
     * 电子保单下载地址
     */
    public const POLICY_FILE_URL = 'policy_file_url';

    /**
     * 电子保单id
     */
    public const POLICY_FILE_ID = 'policy_file_id';

    /**
     * 电子保单下载地址
     */
    public const POLICY_FILE_LINK = 'policy_file_link';

    /**
     * 联系地址
     */
    public const CONTACT_ADDRESS = 'contact_address';

    /**
     * 详情地址
     */
    public const DETAIL_ADDRESS = 'detail_address';

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return [
            self::ID_CARD               => '身份证号',
            self::MOBILE                => '手机号',
            self::EMAIL                 => '邮箱',
            self::PAYMENT_ACCOUNT       => '银行卡号',
            self::CARD_NUMBER           => '银行卡号',
            self::WX_ID                 => '微信号',
            self::POLICY_FILE_URL       => '电子保单下载地址',
            self::POLICY_FILE_ID        => '电子保单id',
            self::POLICY_FILE_LINK      => '电子保单原始下载地址',
            self::CONTACT_ADDRESS       => '联系地址',
            self::DETAIL_ADDRESS        => '详情地址',
        ];
    }

    /**
     * 全部加密
     *
     * @return array
     */
    public static function showNone(): array
    {
        return self::all();
    }

    /**
     * 除手机号外，其他字段加密
     *
     * @return array
     */
    public static function showMobile(): array
    {
        return array_diff(self::showNone(), [self::MOBILE]);
    }

    /**
     * 敏感字段和字段类型映射
     *
     * @return string[]
     */
    public static function getAttrDataMap(): array
    {
        return [
            self::ID_CARD                               => HideDataType::ID_CARD,
            self::CERTIFICATES_NUMBER                   => HideDataType::ID_CARD,
            self::CERTIFICATE_NUMBER                    => HideDataType::ID_CARD,
            self::MOBILE                                => HideDataType::MOBILE,
            self::EMAIL                                 => HideDataType::EMAIL,
            self::WX_ID                                 => HideDataType::WX_ID,
            self::POLICY_FILE_URL                       => HideDataType::POLICY_FILE_URL,
            self::POLICY_FILE_ID                        => HideDataType::POLICY_FILE_URL,
            self::POLICY_FILE_LINK                      => HideDataType::POLICY_FILE_URL,
            self::HOLDER_MOBILE                         => HideDataType::MOBILE,
            self::ACCOUNT_BANK_NUMBER                   => HideDataType::BANK_CARD,
            self::PAYMENT_ACCOUNT                       => HideDataType::BANK_CARD,
            self::BANK_ACCOUNT                          => HideDataType::BANK_CARD,
            self::WECHAT_ALIAS                          => HideDataType::WECHAT_ALIAS,
            self::PHONE                                 => HideDataType::MOBILE,
            self::CONTACT_ADDRESS                       => HideDataType::ADDRESS,
            self::DETAIL_ADDRESS                        => HideDataType::ADDRESS,
        ];
    }
}
