<?php

namespace App\Modules\Basics\Rules;

/**
 * Class Password
 * @package App\ExtendedRules
 */
class Password
{
    /**
     * 校验密码是否符合规则
     * @param $attr
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function validate($attr, $value, $parameters = null)
    {
        // 获取配置的密码长度需求
        $minLength = config('secure.password_length_min');
        $maxLength = config('secure.password_length_max');

        // 检查字符是否合法和位数
        $reg = "/^(?=.*\d)(?=.*[a-zA-Z]).{{$minLength},{$maxLength}}$/";

        return (bool) preg_match($reg, $value);
    }
}
