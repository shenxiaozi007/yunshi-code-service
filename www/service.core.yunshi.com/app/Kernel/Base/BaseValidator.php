<?php

namespace App\Kernel\Base;

use Illuminate\Validation\ValidationException;

/**
 * 校验规则
 *
 */
class BaseValidator
{
    /**
     * @var array
     */
    protected $rules = [];

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var array
     */
    protected $message = [];

    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @return array
     */
    protected function rules() : array
    {
        return [];
    }

    /**
     * @return mixed
     */
    protected function attributes() : array
    {
        return [];
    }

    /**
     * @return mixed
     */
    protected function messages() : array
    {
        return [];
    }

    /**
     * @param array $data
     * @return $this
     */
    public function with(array $data)
    {
        $this->setData($data);

        return $this;
    }

    /**
     * Validate data.
     * @param array $data
     * @param null $scene 验证场景
     * @throws ValidationException
     */
    public function validate(array $data = [], $scene = null)
    {
        if ($data) $this->setData($data);

        $this->scene = $scene;

        $this->beforeValidate();

        validator(
            $this->getData(),
            $this->getRules(),
            $this->getMessage(),
            $this->getAttributes()
        )->validate();

        $this->afterValidate();
    }

    protected function beforeValidate()
    {

    }

    protected function afterValidate()
    {
    }

    /**
     * 验证的场景 例如新增数据和编辑数据验证的字段不同 ，根据场景取不同的验证规则数组
     *
     * @var null
     */
    protected $scene = null;

    /**
     * @return mixed
     */
    public function getRules()
    {
        if (filled($this->scene) && method_exists($this, $this->scene . 'Rules')) {
            $rules = call_user_func([$this, $this->scene . 'Rules']);
        } else {
            $rules = $this->rules ?: $this->rules();
        }

        return $rules;
    }

    /**
     * @param mixed $rules
     */
    public function setRules($rules): void
    {
        $this->rules = $rules;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message ?: $this->messages();
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message): void
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes ?: $this->attributes();
    }

    /**
     * @param mixed $attributes
     */
    public function setAttributes($attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }
}
