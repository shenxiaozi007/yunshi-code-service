<?php

namespace App\Modules\Basics\Rules;

/**
 * 证件信息校验规则
 *
 */
class Certificate
{
    /**
     * 身份证号码校验
     *
     * @param $attr
     * @param $value
     * @param $parameters
     * @return false|int
     */
    public function idCard($attr, $value, $parameters)
    {
        if (! preg_match("/(^\d{17}([0-9]|X)$)/", $value)) return false;

        // 检查生日日期是否正确
        if (! strtotime(substr($value, 6, 8))) return false;

        // 检验18位身份证的校验码是否正确。
        // 校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
        $numbers    = [7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2];
        $characters = ['1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2'];

        $sign = 0;

        for ($i = 0; $i < 17; $i++)
        {
            $sign += intval($value[$i]) * $numbers[$i];
        }

        return $characters[$sign % 11] == $value[17];
    }

    /**
     * 护照
     *
     * @param $attr
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function passport($attr, $value, $parameters)
    {
        return preg_match("/^[A-Za-z0-9]{7,9}$/", $value);
    }
}
