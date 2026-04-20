<?php

namespace App\Modules\Management\Business\Rbac\Factory;

use App\Exceptions\Common\AuthException;
use App\Modules\Basics\Constant\Common\RedisCacheKey;

/**
 * 授权密码错误统计分析
 * @author leo 2021/7/30
 */
Trait AuthPasswordErrorStatisticsTrait
{
    /** @var array */
    protected $config;

    /**
     * 是否开启
     * @return bool
     * @author leo 2021/8/31
     */
    protected function isEnable(): bool
    {
        return array_get($this->config, 'enable', false);
    }

    /**
     * 检查密码错误数量
     * @param string $account
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     * @throws AuthException
     */
    public function checkPasswordErrorCount(string $account): void
    {
        if (!$this->isEnable() || $this->isWhiteList($account)) return;

        $count = app('redis')->get($this->getCacheKey($account));

        $maxCount = array_get($this->config, 'error_max_count', 10);

        if ($count >= $maxCount)
        {
            info('checkPasswordErrorCount:');
            info('ip: ' . get_real_ip());
            info('account: ' . $account);

            throw new AuthException(400012, [], $this->getPasswordErrorPromptMessage($account));
        }
    }

    /**
     * 密码错误储存错误信息
     * @param string $account
     * @throws AuthException
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     * @author leo 2021/8/2
     */
    public function passwordError(string $account): void
    {
        $errMsg = '';

        // 开启而且不在白名单内
        if ($this->isEnable() && !$this->isWhiteList($account))
        {
            $count = $this->incrementPasswordErrorCount($account);

            if ($count > 1)
            {   // 当错误次数大于1次的时候才提醒临近锁定账户的信息 否则正常显示设定错误信息
                $errMsg = $this->getPasswordErrorPromptMessage($account);
            }
        }

        throw new AuthException(400004, [], $errMsg);
    }

    /**
     * 递增密码错误次数
     * @param string $account
     * @return int
     * @author leo 2021/7/30
     */
    public function incrementPasswordErrorCount(string $account): int
    {
        $key = $this->getCacheKey($account);

        $result = app('redis')->incr($key);

        app('redis')->expire($key, array_get($this->config, 'lock_time', 3600));

        return $result;
    }

    /**
     * 获取密码错误提示消息
     * @param string $account
     * @return string
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     * @author leo 2021/8/2
     */
    public function getPasswordErrorPromptMessage(string $account): string
    {
        $count = app('redis')->get($this->getCacheKey($account));

        $maxCount = array_get($this->config, 'error_max_count', 10);

        $diffCount = $maxCount - $count;

        if ($diffCount > 0)
        {   // 账户未被锁定
            return sprintf(
                array_get($this->config, 'near_lock_tips_message', ''),
                $diffCount
            );
        }

        // 获取锁定时长
        $lockTime = app('redis')->ttl($this->getCacheKey($account));

        if ($lockTime > 0)
        {
            // 锁定分钟最少显示1分钟
            $lockMinute = max(ceil($lockTime / 60), 1);

            return sprintf(
                array_get($this->config, 'lock_tips_message'),
                $lockMinute . '分钟'
            );
        }

        // 当账户被设置为永久锁定的时候显示
        return '您的账号已被锁定,请联系客服解决';
    }

    /**
     * 清除登录密码错误数据
     * @param string $account
     * @author leo 2021/8/2
     */
    public function clearPasswordErrorCount(string $account): void
    {
        app('redis')->del($this->getCacheKey($account));
    }

    /**
     * 获取密码错误次数储存KEY
     * @param string $account
     * @return string
     * @author leo 2021/8/2
     */
    private function getCacheKey(string $account): string
    {
        return RedisCacheKey::generateCacheKey(
            array_get($this->config, 'password_error_count_key'),
            $account
        );
    }

    /**
     * 加载配置
     * @author leo 2021/8/2
     */
    private function loadConfig(): void
    {
        $this->config = config('auth_password_check');
    }

    /**
     * 是否是白名单账户
     * @param string $account
     * @return bool
     * @author leo 2021/8/2
     */
    private function isWhiteList(string $account): bool
    {
        $whiteList = to_array(array_get($this->config, 'white_list_accounts', ''));

        return in_array($account, $whiteList, true);
    }

}
