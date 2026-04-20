<?php

namespace App\Modules\Basics\Rules;

use Illuminate\Validation\Rule;

/**
 * 手机号验证规则
 * Class Mobile
 * @package App\Modules\Basics\Rule
 */
class Username extends Rule
{
    /**
     * 判断验证是否通过
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function validate($attribute, $value) : bool
    {
        preg_match('/^[a-zA-Z0-9]+$/', $value, $matches);
        return (bool) $matches;
    }

}
