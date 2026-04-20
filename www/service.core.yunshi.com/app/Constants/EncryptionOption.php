<?php

namespace App\Modules\Basics\Constant\Rbac;

use App\Kernel\Base\BaseConstant;

/**
 * @author 秦昊
 * Date: 2021/8/31 10:40
 */
class EncryptionOption extends BaseConstant
{
    /**
     * 明文
     */
    public const SHOW_ALL   = 'show_all';

    /**
     * 部分加密
     */
    public const SHOW_PART  = 'show_part';

    /**
     * 密文
     */
    public const SHOW_NONE  = 'show_none';

    /**
     * @return array
     * @author 秦昊
     * Date: 2021/8/31 10:57
     */
    public static function getNames(): array
    {
        return [
            self::SHOW_ALL  => '明文',
            self::SHOW_PART => '部分加密',
            self::SHOW_NONE => '密文',
        ];
    }

    /**
     * 获取所有加密级别选项
     *
     * @return array[]
     * @author 秦昊
     * Date: 2021/9/22 17:00
     */
    public static function getAllOption()
    {
        return [
            [
                'label' => EncryptionOption::getName(EncryptionOption::SHOW_ALL),
                'value' => EncryptionOption::SHOW_ALL,
            ],

            [
                'label' => EncryptionOption::getName(EncryptionOption::SHOW_PART),
                'value' => EncryptionOption::SHOW_PART,
            ],

            [
                'label' => EncryptionOption::getName(EncryptionOption::SHOW_NONE),
                'value' => EncryptionOption::SHOW_NONE,
            ],
        ];
    }

    /**
     * 获取除部分加密外的其他加密级别选项
     *
     * @return array[]
     * @author 秦昊
     * Date: 2021/9/22 17:00
     */
    public static function withoutPartOption()
    {
        return [
            [
                'label' => EncryptionOption::getName(EncryptionOption::SHOW_ALL),
                'value' => EncryptionOption::SHOW_ALL,
            ],

            [
                'label' => EncryptionOption::getName(EncryptionOption::SHOW_NONE),
                'value' => EncryptionOption::SHOW_NONE,
            ],
        ];
    }
}
