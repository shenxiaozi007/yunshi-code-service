<?php

use App\Modules\Basics\Constant\Common\Gender;
use App\Modules\Basics\Constant\Common\HideDataAttr;
use App\Modules\Basics\Constant\Insurance\RetainDecimalMethod;
use Carbon\Carbon;
use Laravel\Lumen\Routing\Router;
use Illuminate\Support\Str;

if (!function_exists('format_export_row'))
{
    /**
     * 格式化导出数据
     * @param array $row
     * @param string $pad
     * @return array
     */
    function format_export_row(array $row, string $pad = '-'): array
    {
        foreach ($row as $key => $value)
        {
            if (blank($value))
            {
                $row[$key] = $pad;
            }
        }

        return $row;
    }
}

if (!function_exists('format_null_number'))
{
    /**
     * 格式化空数字
     * @param string|null $num
     * @param string $suffix
     * @param string $pad
     * @return string
     */
    function format_null_number(?string $num, string $suffix = '', string $pad = '-'): string
    {
        if (is_null($num))
        {
            return $pad;
        }

        return $num . $suffix;
    }
}

if (!function_exists('handle_float'))
{
    /**
     * 处理小数
     * @param string|float|int $num
     * @param string $retainWay
     * @param int $precision
     * @return string
     */
    function handle_float(string|float|int $num, string $retainWay = '', int $precision = 2): string
    {
        if (empty($num))
        {
            return $num;
        }

        $tenNum     = bcpow(10, $precision);

        $tempNum    = match ($retainWay)
        {
            RetainDecimalMethod::FLOOR  => floor(bcmul($num, $tenNum, 1)),
            RetainDecimalMethod::CEIL   => ceil(bcmul($num, $tenNum, 1)),
            default                     => round(bcmul($num, $tenNum, 1)),
        };

        return bcdiv($tempNum, $tenNum, $precision);
    }
}

if (!function_exists('check_time'))
{
    /**
     * 校验时间格式
     *
     * @param $time
     * @return bool
     */
    function check_time($time)
    {
        if (!strpos($time, ':')) return false;

        $timeArr = explode(':', $time);

        if (count($timeArr) != 2) return false;

        $hour   = $timeArr[0];
        $minute = $timeArr[1];

        // 校验小时
        if ($hour < 0 || $hour > 23) return false;

        // 校验分钟
        if ($minute < 0 || $minute > 59) return false;

        return true;
    }
}

if (!function_exists('get_file_ext'))
{
    /**
     * 获取文件后缀
     *
     * @param $path
     * @return string
     */
    function get_file_ext($path)
    {
        $arr = pathinfo($path);

        return $arr['extension'] ?? '';
    }
}

if (!function_exists('transform_chinese_character_date_time'))
{
    /**
     * 中文日期时间转换为表示格式日期时间
     *
     * @param string $dateStr
     * @return string
     */
    function transform_chinese_character_date_time(string $dateStr): string
    {
        $dateStr = trim($dateStr);

        $dateStr = str_replace(
            ['年', '月', '日', '时', '分', '秒',],
            ['-', '-',  ' ',  ':',  ':', '',],
            $dateStr
        );

        return preg_replace('/\s+/', ' ', $dateStr);
    }
}

if (!function_exists('get_page_size'))
{
    /**
     * 获取每页默认记录数
     * @param int $default
     * @return int
     */
    function get_page_size(int $default = 20): int
    {
        $pageSize = app('request')->get('page_size');

        if ($pageSize <= 0)
        {
            $pageSize = app('request')->get('limit');
        }

        return $pageSize > 0 ? (int)$pageSize : $default;
    }
}

if (!function_exists('default_page_with_size'))
{
    /**
     * 默认分页参数
     *
     * @param array $params
     * @param int $defaultSize
     * @return array
     */
    function default_page_with_size(array &$params = [], int $defaultSize = 20): array
    {
        $pageSize   = (int)app('request')->get('page_size');
        $page       = (int)app('request')->get('page');

        if ($pageSize <= 0)
        {
            $pageSize = $defaultSize;
        }

        if ($page <= 0)
        {
            $page = 1;
        }

        $params['page']         = $page;
        $params['page_size']    = $pageSize;

        return $params;
    }
}



if (!function_exists('get_real_ip'))
{
    /**
     * 获取真实 id
     * @return string
     */
    function get_real_ip()
    {
        $ip = false;
        if (!empty($_SERVER["HTTP_CLIENT_IP"]))
        {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        }
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
            if ($ip)
            {
                array_unshift($ips, $ip);
                $ip = FALSE;
            }
            for ($i = 0; $i < count($ips); $i++)
            {
                if (!preg_match('/^(10|172\.16|192\.168)\./i', $ips[$i]))
                {
                    $ip = $ips[$i];
                    break;
                }
            }
        }
        return ($ip ?: $_SERVER['REMOTE_ADDR']);
    }
}

if (!function_exists('hide_phone'))
{
    /**
     * 用 * 号替换手机号中间 4 位
     *
     * @param $phone
     * @param string $symbol
     * @return null|string|string[]
     */
    function hide_phone($phone, $symbol = '****')
    {
        return preg_replace('/(1[123456789][0-9])[0-9]{4}([0-9]{4})/i', "$1{$symbol}$2", $phone);
    }
}

if (! function_exists('file_url'))
{
    /**
     * 文件地址
     *
     * @param string $fileId
     * @param bool $withScheme 链接是否带协议
     * @return string
     */
    function file_url(string $fileId, bool $withScheme = false)
    {
        $host = config('api.file.file_show_host');
        $path = '/file/show/'. $fileId;

        if ($withScheme)
        {
            return $host . $path;
        }

        $host = str_replace(['http://', 'https://'], '', $host);

        return '//' . $host . $path;
    }
}

if (!function_exists('hash_user_id'))
{
    /**
     * 获取用户id的hash值
     * @param int $id
     * @return string
     */
    function hash_user_id(int $id)
    {
        return md5('user_token' . md5($id));
    }
}

if (!function_exists('agent_avatar_url'))
{
    /**
     * @param string $token
     * @return string
     */
    function agent_avatar_url(string $token)
    {
        return env('USER_WEB_HOST') . '/web/agent/avatar/' . $token . '.jpg';
    }
}

if (!function_exists('hash_password_with_salt'))
{
    /**
     * 密码加密
     *
     * @param string $password
     * @param string $salt
     * @return string
     */
    function hash_password_with_salt(string $password, string $salt): string
    {
        return md5($salt . md5($password));
    }
}

if (!function_exists('get_current_route_name'))
{
    /**
     * 获取当前路由名称
     *
     * @return string
     */
    function get_current_route_name(): string
    {
        return array_get(app('request')->route()[1], 'as');
    }
}

if (!function_exists('get_route_real_name'))
{
    /**
     * 获取当前路由真实名称
     *
     * @param string $webRouteName
     * @return string
     */
    function get_route_real_name(string $webRouteName): string
    {
        if (empty($webRouteName))
        {
            return $webRouteName;
        }

        if (strpos($webRouteName, '`') > 0)
        {
            return strstr($webRouteName, '`', true);
        }

        return $webRouteName;
    }
}

if (!function_exists('get_current_route_tags'))
{
    /**
     * 获取当前路由tags
     *
     * @param string $currentRouteName
     * @return array
     */
    function get_current_route_tags(string $currentRouteName): array
    {
        $tags = [];
        if (empty($currentRouteName))
        {
            return $tags;
        }

        preg_match('/`(.*)`$/', $currentRouteName, $matches);

        if (count($matches) == 2)
        {
            $tags = explode(',', $matches[1]);
        }

        return $tags;
    }
}

if (!function_exists('get_tree'))
{
    /**
     * 格式化成树状结构
     *
     * @param array $array
     * @param int $pid
     * @param int $level
     * @param string $parentKeyName
     * @return array
     */
    function get_tree(array $array, int $pid = 0, int $level = 1, string $parentKeyName = 'parent_id'): array
    {
        $list = [];

        foreach ($array as $key => $value) {
            //第一次遍历,找到父节点为根节点的节点 也就是pid=0的节点
            if ($value[$parentKeyName] == $pid) {
                //父节点为根节点的节点,级别为0，也就是第一级
                $value['level'] = $level;

                //开始递归,查找父ID为该节点ID的节点,级别则为原级别+1
                if ($children = get_tree($array, $value['id'], $level + 1, $parentKeyName)) {
                    $value['children'] = $children;
                }

                //把数组放到list中
                $list[] = $value;

                //把这个节点从数组中移除,减少后续递归消耗
                unset($array[$key]);
            }
        }

        return $list;
    }
}

if (!function_exists('get_rand_ip')) {
    /**
     * 获取随机 IP
     * @return string
     */
    function get_rand_ip()
    {
        $ip_long  = array(
            array('607649792', '608174079'), //36.56.0.0-36.63.255.255
            array('1038614528', '1039007743'), //61.232.0.0-61.237.255.255
            array('1783627776', '1784676351'), //106.80.0.0-106.95.255.255
            array('2035023872', '2035154943'), //121.76.0.0-121.77.255.255
            array('2078801920', '2079064063'), //123.232.0.0-123.235.255.255
            array('-1950089216', '-1948778497'), //139.196.0.0-139.215.255.255
            array('-1425539072', '-1425014785'), //171.8.0.0-171.15.255.255
            array('-1236271104', '-1235419137'), //182.80.0.0-182.92.255.255
            array('-770113536', '-768606209'), //210.25.0.0-210.47.255.255
            array('-569376768', '-564133889'), //222.16.0.0-222.95.255.255
        );
        $rand_key = mt_rand(0, 9);
        return long2ip(mt_rand($ip_long[$rand_key][0], $ip_long[$rand_key][1]));
    }
}

if (!function_exists('format_big_decimal'))
{
    /**
     * 格式化大数字
     *
     * @param mixed $value
     *
     * @return string
     */
    function format_big_decimal($value)
    {
        if ($value >= 10000) {
            $value = round($value / 10000, 2);

            return format_decimal($value) . '万';
        }

        return format_decimal($value);
    }
}

if (!function_exists('format_decimal'))
{
    /**
     * 格式化数字，去除多余的0
     *
     * @param mixed $value
     *
     * @return int|float
     */
    function format_decimal($value)
    {
        $intValue   = intval($value);
        $floatValue = floatval($value);

        if ($intValue == $floatValue) {
            return $intValue;
        }

        return $floatValue;
    }

}

if (!function_exists('csv_export'))
{
    /**
     * 导出excel(csv)
     *
     * @param $fileName
     * @param array $data 导出数据
     * @param array $headList 第一行,列名
     */
    function csv_export($fileName, array $data = [], array $headList = [])
    {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $fileName . '.csv"');
        header('Cache-Control: max-age=0');

        ob_start();

        //打开PHP文件句柄,php://output 表示直接输出到浏览器
        $fp = fopen('php://output', 'a');

        if (!empty($headList)) {
            //输出Excel列名信息
            foreach ($headList as $key => $value) {
                //CSV的Excel支持GBK编码，一定要转换，否则乱码
                $headList[$key] = iconv('utf-8', 'gbk', $value);
            }

            //将数据通过fputcsv写到文件句柄
            fputcsv($fp, $headList);
        }

        //计数器
        $num = 0;

        //每隔$limit行，刷新一下输出buffer，不要太大，也不要太小
        $limit = 100000;

        //逐行取出数据，不浪费内存
        $count = count($data);
        for ($i = 0; $i < $count; $i++) {
            $num++;

            //刷新一下输出buffer，防止由于数据过多造成问题
            if ($limit == $num) {
                ob_flush();
                flush();
                $num = 0;
            }

            $row = $data[$i];
            foreach ($row as $key => $value) {
                $row[$key] = iconv('utf-8', 'gbk//IGNORE', $value);
            }

            fputcsv($fp, $row);
        }
    }
}

if (!function_exists('filter_arr_column')) {
    /**
     * 移除数组中的空值
     * @param array $arr
     * @return array
     */
    function filter_arr_column(array $arr)
    {
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $arr[$key] = filter_arr_column($value);
            } else {
                if (blank($value) || is_null($value)) {
                    unset($arr[$key]);
                }
            }
        }

        return $arr;
    }
}


if (!function_exists('make_salt')) {
    /**
     * 生成随机密码盐
     *
     * @param int $length
     * @return string
     */
    function make_salt(int $length = 6)
    {
        $length = intval($length) ?: 6;

        return str_random($length);
    }
}

if (!function_exists('to_array')) {

    /**
     * 参数转换成数组
     *
     * @param $value
     * @param string $delimiter
     * @return array
     */
    function to_array($value, $delimiter = ',')
    {
        if (is_array($value)) {
            $result = $value;
        } elseif (is_object($value) && method_exists($value, 'toArray')) {
            $result = $value->toArray();
        } elseif (is_object($value)) {
            $result = json_strict_decode(json_encode($value));
        } elseif (is_string($value) && (false !== strpos($value, $delimiter))) {
            $result = explode($delimiter, trim($value, " \t\n\r\0\x0B{$delimiter}"));
        } else {
            $result = array_values(compact('value'));
        }

        return $result;
    }
}

if (!function_exists('to_int_array'))
{
    function to_int_array(array $arr): array
    {
        return array_map(function ($item)
        {
            return (int) $item;
        }, $arr);
    }
}

if (!function_exists('div_to_percent')) {
    /**
     * 两数相除得出百分比
     *
     * @param float $dividend
     * @param float $divisor
     * @param int $precision
     * @param bool $symbolSuffix
     *
     * @return string
     */
    function div_to_percent(float $dividend, float $divisor, $precision = 2, bool $symbolSuffix = false)
    {
        if (0 == $divisor) {
            return 0;
        }

        $result = bcdiv(bcmul($dividend, 100, 18), $divisor, 18);
        $result = round($result, $precision);

        if ($symbolSuffix) {
            return sprintf('%s%%', $result);
        }

        return $result;
    }
}

if (!function_exists('check_mobile')) {
    function check_mobile($mobile)
    {
        return preg_match('/^1\d{10}$/', $mobile);
    }
}

if (!function_exists('dump_sql')) {
    function dump_sql()
    {
        app('db')->listen(function ($sql) {

            $singleSql = $sql->sql;

            if ($sql->bindings) {
                foreach ($sql->bindings as $replace) {
                    $value     = is_numeric($replace) ? $replace : "'" . $replace . "'";
                    $singleSql = preg_replace('/\?/', $value, $singleSql, 1);
                }
            }

            dump($singleSql);

        });
    }
}

if (!function_exists('info_sql')) {
    function info_sql()
    {
        app('db')->listen(function ($sql) {

            $singleSql = $sql->sql;

            if ($sql->bindings) {
                foreach ($sql->bindings as $replace) {
                    $value     = is_numeric($replace) ? $replace : "'" . $replace . "'";
                    $singleSql = preg_replace('/\?/', $value, $singleSql, 1);
                }
            }

            info($singleSql);
        });
    }
}

if (!function_exists('div_average')) {
    /**
     * 计算平均数
     * @param float $dividend
     * @param float $divisor
     * @param int $precision
     * @return false|float|int
     */
    function div_average(float $dividend, float $divisor, int $precision = 2)
    {
        if (0 == $divisor) {
            return 0;
        }

        $result = bcdiv($dividend, $divisor, 18);

        return round($result, $precision);
    }
}

if (!function_exists('is_testing')) {
    /**
     * 是否测试环境
     *
     * @return bool
     */
    function is_testing()
    {
        return config('app.env') == 'local' || config('app.debug') == true;
    }
}

if (!function_exists('keep_two_decimal')) {
    /**
     * 保留两位小数
     *
     * @param $value
     * @return double
     */
    function keep_two_decimal($value)
    {
        return round($value, 2);
    }
}

if (!function_exists('add_route')) {

    /**
     * 添加一个路由
     * @param $uri
     * @param $action
     * @param string[] $methods
     * @return Router
     */
    function add_route($uri, $action, $methods = ['GET', 'POST'])
    {
        /** @var Router::class $router */
        $router = app('router');

        $methods = array_map('strtoupper', (array) $methods);

        $router->addRoute($methods, $uri, $action);

        return $router;
    }
}

if(! function_exists('write_log'))
{
    /**
     * 写文件
     * @param $file
     * @param $content
     * @param int $mode
     * @return bool|false|int
     */
    function write_log($file, $content, $mode = 0755)
    {
        $path = dirname($file);

        //文件夹检测
        if(!file_exists($path)){
            mkdir($path, $mode,true);
        }

        //检测写入权限
        if(!is_writable($path)){
            return false;
        }

        if (is_object($content)) {
            $content = to_array($content);
        }

        if (is_array($content))
        {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $content = date('Y-m-d H:i:s') . ' : ' . $content ."\n\n";

        $file .= '-' . date('Ymd') . '.log';

        return file_put_contents($file, $content, FILE_APPEND);
    }
}

if(!function_exists('get_file_absolute_path'))
{
    /**
     * 获取文件的绝对路径，相当当前项目目录而言
     * @param string $file 相对项目根目录的文件路径
     * @return string
     */
    function get_file_absolute_app_path(string $file) :string
    {
        if(!file_exists($file))
        {
            $file = base_path($file);
        }

        return $file;
    }
}

if(!function_exists('get_files'))
{
    /**
     * 获取文件夹里的文件，
     * @param string $file 相对项目根目录的文件路径
     * @param int $sorting_order
     * @return array
     */
    function get_files(string $file, int $sorting_order = SCANDIR_SORT_ASCENDING) :array
    {
        // 存储所有文件
        $files = [];

        if (is_dir($file)) {
            $files = array_filter(scandir($file, $sorting_order), function ($value) {
                return in_array($value, ['.', '..']);
            });
        } else {
            $files[] = $file;
        }

        return $files;
    }
}

if (!function_exists('export_default_format'))
{
    /**
     * 导出时 添加默认格式
     *
     * @param $value
     *
     * @return string
     */
    function export_default_format($value): string
    {
        if (is_numeric($value)) {
            $value = "\t" . $value;
        }

        if (!empty(strtotime($value))) {
            $value = "\t" . $value;
        }

        if (!filled($value)) {
            $value = "-";
        }

        return remove_emoji($value);
    }
}

if (!function_exists('remove_emoji'))
{
    /**
     * 过滤字符串中的微信表情
     *
     * @param $value
     *
     * @return string
     */
    function remove_emoji($value): string
    {
        preg_match_all('/[\x{4e00}-\x{9fff}\d\w\s[:punct:]]/u', $value, $matches);
        $value = implode("", $matches[0]);

        return $value;
    }
}

if ( ! function_exists('build_unique_md5_no') ) {
    /**
     * 删除空值，排序之后再MD5
     *
     * @param ...$args
     * @return string
     */
    function build_unique_md5_no(...$args): string
    {
        $params = array_filter($args);

        if (filled($params))
        {
            // 多维数组变为一维
            $data = array_flatten($params);

            asort($data);

            return md5(implode('', $data));
        }

        return false;
    }
}


if ( ! function_exists('get_client_channel') ) {
    /**
     * 获取客户端的 channel
     * @return mixed
     */
    function get_client_channel()
    {
        return app('request')->get('_channel');
    }
}

if (! function_exists('div_to_ten_thousand'))
{
    /**
     * 数字转换为单位为万 eg: 120000 转换为 12
     * @param int $number
     * @param int $scale
     * @return float|int
     */
    function div_to_ten_thousand(int $number, $scale = 2)
    {
        $tenThousand = (float) bcdiv($number, 10000, $scale);

        //  如果小数点后面都是0，把小数点去掉
        if (ceil($tenThousand) == floor($tenThousand)) {
            $tenThousand = (int) $tenThousand;
        }

        return $tenThousand;
    }
}

if (!function_exists('transform_params_date_to_timestamp'))
{
    /**
     * 将请求参数的日期范围转为为时间戳范围
     * @param array $params
     * @param array $keyMap 需要转换的字段。
     * 支持2种形式：
     * 1、传入需要转换值的字段名称数组，转换后的值覆盖到原来的字段
     * 2、传入新旧key映射关系,可以混合第一种。['old_key' => 'new_key', 'old_key2']
     * @param bool $preserveOriginalKey 如果是新旧key，是否保留旧key的值在参数数组中
     * @return array
     */
    function transform_params_date_to_timestamp(array $params, array $keyMap, bool $preserveOriginalKey = false): array
    {
        foreach($keyMap as $originalKey => $newKey)
        {
            if (is_numeric($originalKey))
            {
                $originalKey = $newKey;
            }

            $originalValue = $preserveOriginalKey ? array_get($params, $originalKey) : array_pull($params, $originalKey);

            if ($originalValue)
            {
                $carbon = Carbon::createFromTimestamp(strtotime($originalValue));

                if (Str::endsWith($originalKey, ['start', 'gte', 'begin']))
                {
                    $newValue = $carbon->startOfDay()->getTimestamp();
                }
                elseif (Str::endsWith($originalKey, ['end', 'lte', 'finish']))
                {
                    $newValue = $carbon->endOfDay()->getTimestamp();
                }
                elseif (Str::contains($originalKey, ['start', 'gte', 'begin']))
                {
                    $newValue = $carbon->startOfDay()->getTimestamp();
                }
                elseif (Str::contains($originalKey, ['end', 'lte', 'finish']))
                {
                    $newValue = $carbon->endOfDay()->getTimestamp();
                }
                else
                {
                    $newValue = $carbon->getTimestamp();
                }

                $params[$newKey] = $newValue;
            }
        }

        return $params;
    }
}

/**
 * 格式化时间字符串为指定格式
 */
if (!function_exists('format_time'))
{
    /**
     * @param string|null $timeStr 不要传入时间戳作为本参数的值，这样可能转换错误
     * @param string $format
     * @return string
     */
    function format_time(null|string $timeStr, string $format): string
    {
        if (empty($timeStr))
        {
            return '';
        }

        $timestamp = strtotime($timeStr);

        // 如果传入是无法识别的日期格式会返回
        if ($timestamp === false)
        {
            return '';
        }

        return date($format, $timestamp);
    }
}


if (!function_exists('generate_code')) {
    /**
     * 发号器
     * @param string $prefix
     * @param int $length
     * @return string|false
     */
    function generate_code($length = 32, string $prefix = '')
    {
        if (strlen($prefix) >= $length) {
            return false;
        }

        $length = bcsub($length, strlen($prefix));

        return $prefix . str_random($length);
    }
}

if (!function_exists('recognize_id_card')) {
    /**
     * 身份证信息识别
     *
     * @param $number
     * @param $outputFormat
     * @return array
     */
    function recognize_id_card($number, $outputFormat = 'Ymd')
    {
        if (strlen($number) == 18) {
            $birthday = Carbon::createFromFormat('Ymd', substr($number, 6, 8))->format($outputFormat);
            return [
                'birthday' => $birthday,
                'gender'   => intval($number[16]) % 2 ? Gender::MALE : Gender::FEMALE,
                'age'      => calculate_age($birthday),
            ];
        }

        return [];
    }
}

if (!function_exists('calculate_age'))
{
    /**
     * 根据日期计算年龄
     *
     * @param string $birthday
     * @param string $format
     * @return bool|int
     */
    function calculate_age(string $birthday, string $format = 'Y-m-d')
    {
        if (!Carbon::hasFormat($birthday, $format)) return false;

        $birthday = Carbon::createFromFormat($format, $birthday)->startOfDay();
        $now      = Carbon::now()->startOfDay();

        return $now->diffInYears($birthday);
    }
}


if (! function_exists('hide_data'))
{
    /**
     * 保单敏感数据打码
     *
     * @param $data
     * @param $type
     * @return string
     */
    function hide_data($data, $type): string
    {
        $len = mb_strlen($data);

        if ($len < 1)
        {
            return '';
        }

        switch ($type)
        {
            case HideDataAttr::ID_CARD:
                // 证件号码 隐藏后四位
            case HideDataAttr::WX_ID:
                // 微信号，最后四位打码
                $count = 4;
                return mb_substr($data, 0, -1 * $count) . str_repeat('*', $count);

            case HideDataAttr::MOBILE:
                // 用 * 号替换手机号中间 4 位
                return hide_phone($data);

            case HideDataAttr::EMAIL:
                // 邮箱打码，@之前全部打码
                return preg_replace('/./i', '*', $data, strpos($data, '@') ?: $len);

            case HideDataAttr::CARD_NUMBER:
                // 银行卡号打码，仅保留后四位
                $numCount = 4;
                return preg_replace('/./i', '*', $data, ($len - $numCount) > 0 ? $len - $numCount : 0 );

            case HideDataAttr::WECHAT_ALIAS:
                // 微信号打码，仅保留后四位，前面不管多长都用四个星号代替
                return '****' . substr($data, -4);

            case HideDataAttr::CONTACT_ADDRESS:
                // 地址信息 打码街、单元、座、楼、室、栋、路前面的数字和字母
                $std = [
                    '零', '壹', '贰', '叁', '肆', '伍', '陆', '柒', '捌', '玖', '拾',
                    '零', '一', '二', '三', '四', '五', '六', '七', '八', '九', '十'
                ];

                $data = str_replace($std, '*', $data);

                return preg_replace('/([a-z0-9]+)/i', '*${2}', $data);

            default:
                return str_repeat('*', $len);
        }
    }
}
