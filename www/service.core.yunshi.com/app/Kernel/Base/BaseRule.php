<?php

namespace App\Kernel\Base;

use App\Exceptions\Common\AppException;
use Illuminate\Contracts\Validation\ImplicitRule;
use Illuminate\Validation\Concerns\ValidatesAttributes;

/**
 * 校验规则基类
 *
 */
abstract class BaseRule implements ImplicitRule
{
    use ValidatesAttributes;

    /**
     * @var bool
     */
    protected $strict;

    /**
     * @var string
     */
    protected $message;

    /**
     * PersonalName constructor.
     *
     * @param bool $strict
     */
    public function __construct(bool $strict)
    {
        $this->strict = $strict;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        try
        {
            if (! $this->strict && blank($value)) return true;

            $this->validateIsFilled($attribute,$value);

            $this->validate($attribute, $value);
        }
        catch (AppException $exception)
        {
            if ($exception->getCode() == '100003')
            {
                $this->message = $exception->getMessage();

                return false;
            }
        }

        return true;
    }

    /**
     * 校验是否有值
     *
     * @param $attribute
     * @param $value
     * @throws AppException
     */
    protected function validateIsFilled($attribute, $value)
    {
        if (! $this->validateRequired($attribute, $value))
        {
            throw new AppException(100003, [], '请填写:attribute');
        }
    }

    /**
     * Validate value.
     *
     * @param $attribute
     * @param $value
     * @return mixed
     */
    abstract protected function validate($attribute, $value);

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
