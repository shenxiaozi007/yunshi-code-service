<?php

namespace App\Modules\Basics\Rules;

use Illuminate\Validation\Rule;

/**
 * 手机号验证规则
 * Class Mobile
 * @package App\Modules\Basics\Rule
 */
class Mobile extends Rule
{
    /**
     * 判断验证是否通过
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function validate($attribute, $value) : bool
    {
        preg_match('/^1[3-9][0-9]{9}$/', $value, $matches);
        return (bool) $matches;
    }

    /**
     * 获取验证错误信息
     *
     * @return string
     */
    public function message()
    {
        return '手机号格式不正确';
    }

}
