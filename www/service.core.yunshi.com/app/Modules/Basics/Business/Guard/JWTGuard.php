<?php

namespace App\Modules\Basics\Business\Guard;

use App\Exceptions\Common\AuthException;
use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\Macroable;

/**
 * Json web token
 *
 */
abstract class JWTGuard implements Guard
{
    use GuardHelpers, Macroable;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var string
     */
    protected $token;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var
     */
    protected $redis;

    /**
     * @var
     */
    protected $config;

    /**
     * 缓存有效时间，单位为秒
     *
     * @var int
     */
    protected $lifeTime;

    /**
     * JWTGuard constructor.
     *
     * @param $request
     * @param $config
     */
    public function __construct(Request $request, array $config = [])
    {
        $this->initConfig($config);

        $this->request = $request;
        $this->redis   = $this->initRedis();
        $this->token   = $this->getAuthorization();
    }

    /**
     * 获取请求 token
     *
     * @return mixed
     */
    public abstract function getAuthorizationKey();

    /**
     * 获取 redis 连接名称
     *
     * @return mixed
     */
    protected abstract function getRedisConnection();

    /**
     * @param array $config
     */
    protected function initConfig(array $config)
    {
        if ($lifeTime = array_get($config, 'cache.expire')) {
            $this->lifeTime = $lifeTime;
        }

        $this->config = $config;
    }

    /**
     * 续期
     */
    public function renewal()
    {
        $this->renewalUserCache();

        $this->renewalUserTokenSetCache();
    }

    /**
     * 续期缓存集合
     */
    protected function renewalUserTokenSetCache()
    {
        if ($this->user) {
            $userId  = $this->user->getAuthIdentifier();

            $setCacheKey = $this->getSetCacheKey($userId);

            $this->redis->expire($setCacheKey, $this->lifeTime + 360);
        }
    }

    /**
     * 续期用户信息
     *
     */
    public function renewalUserCache()
    {
        if ($token = $this->getToken()) {

            $key = $this->getCacheKey($token);

            $this->redis->expire($key, $this->lifeTime);
        }
    }

    /**
     * 保存用户信息到缓存
     * @param User $user
     * @return string
     */
    protected function doLogin(User $user)
    {
        // 创建用户模型
        $this->user = $user;

        // 保存授权信息到缓存
        $base64EncodeToken = $this->rememberUser($this->user->toArray());

        //存储集合
        $this->rememberUserTokenSet();

        $this->renewal();

        return $base64EncodeToken;
    }

    /**
     * 设置缓存集合
     */
    protected function rememberUserTokenSet()
    {
        if ($token = $this->getToken())
        {
            $userId = $this->user->getAuthIdentifier();

            $setCacheKey = $this->getSetCacheKey($userId);

            $cacheKey = $this->getCacheKey($token);

            $this->redis->sadd($setCacheKey, $cacheKey);
        }
    }

    /**
     * 退出登录
     * @return bool
     */
    public function logout()
    {
        if ($token = $this->getToken()) {

            $key = $this->getCacheKey($token);

            try
            {
                if($user = $this->user())
                {
                    $this->removeTokenFromSet($user->getAuthIdentifier());
                }
            }catch (AuthException $exception){
                //coding..
            }

            $this->redis->del($key);
        }

        return true;
    }

    /**
     * 删除用户信息缓存
     *
     * @param $userId
     * @return bool
     */
    public function removeTokenFromSet($userId)
    {
        $setCacheKey = $this->getSetCacheKey($userId);

        $cacheKey = $this->getCacheKey($this->getToken());

        $this->redis->srem($setCacheKey, $cacheKey);

        return true;
    }

    /**
     * 获取用户的token 数据集合
     *
     * @param $userId
     * @return array
     */
    public function getTokenInfoSet($userId)
    {
        $setCacheKey = $this->getSetCacheKey($userId);

        $tokenCacheKeys = $this->redis->smembers($setCacheKey);

        $tokenInfoArr = array();

        if(!empty($tokenCacheKeys)) {
            foreach ($tokenCacheKeys as $cacheKey) {
                $tokenInfoArr[$cacheKey] = $this->redis->hgetall($cacheKey);
            }
        }

        return $tokenInfoArr;
    }

    /**
     * 退出登录
     *
     * @param $userId
     * @param string $loginPlatform 需要退出登录那些平台的token
     * @return bool
     */
    public function logoutByUserId($userId, $loginPlatform = '')
    {
        // 获取token集合信息
        if ($tokenInfoArr = $this->getTokenInfoSet($userId))
        {
            $setCacheKey  = $this->getSetCacheKey($userId);

            $tokenCacheKeys  = array_keys($tokenInfoArr);

            // 遍历token缓存key，逐个删除
            foreach ($tokenCacheKeys as $cacheKey)
            {
                $loginInfo = $this->redis->hgetall($cacheKey);
                $platform  = array_get($loginInfo ?: [], 'platform');

                if (
                    (
                        filled($loginPlatform)
                        && $loginPlatform == $platform
                    )
                    || blank($loginPlatform)
                ) {
                    $this->redis->del($cacheKey);
                    // 移除token信息集合中的token缓存key
                    $this->redis->srem($setCacheKey, $cacheKey);
                }
            }
        }

        return true;
    }

    /**
     * 从缓存读取用户信息
     * @return array
     */
    public function getUserFromCache():array
    {
        $userInfo = [];

        if ($token = $this->getToken())
        {
            $userInfo = $this->getUserInfoByToken($token);

            if (filled($userInfo))
            {
                $this->renewal();
            }
        }

        return $userInfo;
    }

    /**
     * 通过token获取用户在jwt中保存的信息
     * @param string $token
     * @return array
     */
    public function getUserInfoByToken(string $token): array
    {
        return $this->redis->hgetall($this->getCacheKey($token)) ?: [];
    }

    /**
     * 缓存用户信息
     *
     * @param array $user
     *
     * @return string $token
     */
    protected function rememberUser(array $user) : string
    {
        $this->token = $token = snow_flake_id(10);

        $key = $this->getCacheKey($token);

        $this->redis->hmset($key, $user);

        $this->redis->expire($key, $this->lifeTime);

        return base64_encode($token);
    }

    /**
     * @param $token
     * @return string
     */
    protected function getCacheKey($token)
    {
        return $this->config['cache']['prefix'] . ':' . $token;
    }

    /**
     * @param $userId
     * @return string
     */
    protected function getSetCacheKey($userId)
    {
        return sprintf($this->config['cache']['set-prefix'], $userId);
    }

    /**
     * @param array $credentials
     * @return bool
     */
    public function validate(array $credentials = [])
    {
        return true;
    }

    /**
     * 初始化 redis 连接
     *
     * @return mixed
     */
    protected function initRedis()
    {
        return app('redis')->connection($this->getRedisConnection());
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return array|string
     */
    protected function getAuthorization()
    {
        return base64_decode($this->request->header($this->getAuthorizationKey()), true);
    }

    /**
     * 清除token key 集合中过期的key
     * @author evan766
     */
    public function clearOverDueSetToken()
    {
        $setCacheKey = $this->getSetCacheKey('*');

        $setCacheKeys = $this->redis->keys($setCacheKey);

        if ($setCacheKeys) {

            foreach ($setCacheKeys as $setCacheKey) {

                $tokeCacheKeys = $this->redis->smembers($setCacheKey);

                foreach ($tokeCacheKeys as $tokeCacheKey) {
                    if (! $this->redis->exists($tokeCacheKey)) {
                        $this->redis->srem($setCacheKey, $tokeCacheKey);
                    }
                }
            }
        }
    }

    /**
     * 清理所有用户的全部token
     *
     * @author 秦昊
     * Date: 2018/10/9 13:02
     */
    public function clearAllToken()
    {
        // 删除token集合
        $this->clearKeysByKeyWord($this->getSetCacheKey('*'));

        // 删除token
        $this->clearKeysByKeyWord($this->getCacheKey('*'));
    }

    /**
     * 根据关键词模糊匹配删除
     *
     * @author 秦昊
     * Date: 2018/10/9 13:15
     * @param $keyWord
     */
    protected function clearKeysByKeyWord($keyWord)
    {
        $keys = $this->redis->keys($keyWord);

        if (!empty($keys))
        {
            foreach ($keys as $key)
            {
                if ($key) {
                    $this->redis->del($key);
                }
            }
        }
    }
}
