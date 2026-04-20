<?php

namespace App\Modules\Management\Business\Guard;

use App\Exceptions\Common\AuthException;
use App\Modules\Basics\Business\Guard\JWTGuard;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * 后台管理员系统 JSON WEB TOKEN 认证
 * Class ManagementJwtGuard
 * @package App\Modules\Management\Business\Guard
 */
class ManagementJwtGuard extends JWTGuard
{
    /**
     * 缓存有效时间，单位为秒
     *
     * @var int
     */
    protected $lifeTime = 86400;

    /**
     * @return array|mixed|string
     */
    public function getAuthorizationKey()
    {
        return $this->config['header'];
    }

    /**
     * Redis 连接名称
     * @return mixed|string
     */
    protected function getRedisConnection()
    {
        return 'jwt-management';
    }

    /**
     * @return User|Authenticatable|null
     * @throws AuthException
     */
    public function user()
    {
        if ($this->token && !$this->user)
        {
            if ($user = $this->getUserFromCache() )
            {
                $this->user = new User($user);
            }
        }

        return $this->user;
    }

    /**
     * 登录
     * 返回token
     * @param array $userInfo
     * @return string
     * @throws AuthException
     */
    public function login(array $userInfo): string
    {
        return self::doLogin(new User($userInfo));
    }
}
