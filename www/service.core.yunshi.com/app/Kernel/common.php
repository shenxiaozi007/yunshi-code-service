<?php

use Illuminate\Support\Facades\Log;

if (!function_exists('advertising_info'))
{
    /**
     * 事件日志
     * @param $message
     * @param array $context
     */
    function advertising_info($message, array $context = [])
    {
        Log::channel('advertising')->info($message, $context);
    }
}

if (! function_exists('trim_any'))
{
    /**
     * 去除所有的空格
     * @param $data
     * @param $charList
     * @return mixed
     */
    function trim_any($data, $charList = " \t\n\r\0\x0B")
    {
        if (is_string($data)) return trim($data, $charList);

        if (is_array($data) || is_object($data))
        {
            foreach ($data as $key => $value)
            {
                $data[$key] = trim_any($value, $charList);
            }

            return $data;
        }

        return $data;
    }
}

if (! function_exists('removeBOM'))
{
    /**
     * 检查字符串是否指定字符集
     *
     * @param string $text
     * @param array $encodings
     * @return array|bool
     */
    function removeBOM(string $text, array $encodings = [])
    {
        $targetEncoding = 'UTF-8';

        if (mb_check_encoding($text, $targetEncoding)) return $text;

        $encodings = array_merge(['ASCII,UTF-8', 'ISO-8859-1'], $encodings);
        $encodings = implode(',', $encodings);
        $text      = mb_convert_encoding($text, $targetEncoding, $encodings);

        if (substr($text, 0, 3) == pack("CCC", 0xEF, 0xBB, 0xBF))
        {
            $text = substr($text, 3);
        }

        return $text;
    }
}

if (! function_exists('json_strict_decode'))
{
    /**
     * 重新封装json解码函数,可防止因为编码而造成得解码失败
     *
     * @author jianwei
     * @param string  $json   需要格式化的数据
     * @param array $encodings
     * @return array
     */
    function json_strict_decode($json, array $encodings = [])
    {
        $json = trim_any($json);

        if (! is_string($json) || empty($json)) return [];

        $json = removeBOM($json, $encodings);
        $data = json_decode($json, true);

        if (empty($data)) return [];

        return $data;
    }
}

if (! function_exists('version'))
{
    /**
     * 版本号
     *
     * @param  boolean $build
     * @notice 当 $build 为 true 时生成新的版本号
     * @return string
     */
    function version($build = false)
    {
        static $version = null;

        if ($build == true || $version == null)
        {
            $version = str_random(32);
        }

        return $version;
    }
}

if (! function_exists('log_channel'))
{
    /**
     * 日志的频道名称
     *
     * @author  jianwei
     * @param string $channel 频道的名称
     * @return string
     */
    function log_channel($channel = null)
    {
        static $name = '';

        if (! empty($channel)) $name = $channel;

        return $name;
    }
}

if (! function_exists('get_now'))
{
    /**
     * 获取当前时间
     *
     * @author  jianwei
     * @return int
     */
    function get_now()
    {
        return time();
    }
}

if (!function_exists('get_http_host'))
{
    /**
     * 获取请求的域名
     * @return string
     */
    function get_http_host()
    {
        return app('request')->server('HTTP_HOST') ?: array_get($_SERVER, 'HTTP_HOST', '');
    }
}

if (!function_exists('set_table_comment'))
{
    /**
     * 为数据表添加注释
     * @param string $tableName
     * @param string $comment
     */
    function set_table_comment(string $tableName, string $comment)
    {
        app('db')->statement("ALTER TABLE `{$tableName}` comment '{$comment}'");
    }
}

if (!function_exists('is_overlap'))
{
    /**
     * 判断两个数值区间是否重叠
     * @param $min1
     * @param $max1
     * @param $min2
     * @param $max2
     * @param bool $is_closed_interval
     * @return bool
     */
    function is_overlap($min1, $max1, $min2, $max2, bool $is_closed_interval = false): bool
    {
        // 2个都是闭区间，边际重叠也算重叠
        if ($is_closed_interval) {
            if(max($min1, $min2) <= min($max1, $max2)) {
                return true;
            }
        } else {
            if(max($min1, $min2) < min($max1, $max2)) {
                return true;
            }
        }

        return false;
    }
}

if(!function_exists('replace_str_to_pound'))
{
    /**
     * 把字符串转换为 #
     *
     * @param $subject
     * @param string $search
     * @return string|string[]
     */
    function replace_str_to_pound($subject, $search = '@@')
    {
        return str_replace($search, '#', $subject);
    }
}

if(!function_exists('snow_flake_id'))
{
    /**
     * 获取全局唯一的雪花 id
     *
     * @param int $customizeStrLength 自定义字符串的长度
     * @return string
     */
    function snow_flake_id(int $customizeStrLength = 4) :string
    {
        return app('Tool\SnowFlake')->id() . '-' . str_random($customizeStrLength);
    }
}

if (! function_exists('get_now'))
{
    /**
     * 获取当前时间
     *
     * @return int
     */
    function get_now()
    {
        return time();
    }
}
