<?php

namespace App\Kernel\Traits;

use App\Kernel\Base\BaseDao;

/**
 * 密码相关
 * Trait PasswordTrait
 */
trait PasswordTrait
{
    /**
     * 更新用户密码
     * @param int $userId
     * @param string $password
     * @return bool
     */
    public function updatePasswordById(int $userId, string $password): bool
    {
        $salt = generate_code(6);

        $data = [
            'salt'     => $salt,
            'password' => hash_password_with_salt($password, $salt),
        ];

        return (bool)$this->userAuthDao()->updateOrCreate([$this->userAuthRelationColumn() => $userId], $data);
    }

    /**
     * 声明auth表的字段名
     * @return string
     */
    protected function userAuthRelationColumn(): string
    {
        return 'account_id';
    }

    /**
     * 初始化用户数据访问层
     * @return mixed
     */
    abstract protected function userAuthDao(): BaseDao;

    /**
     * 获取密码正则
     * @return string
     */
    public function getStoragePasswordPattern():string
    {
        return "/^(?=.*\d)(?=.*[a-zA-Z]).{8,32}$/";
    }
}
