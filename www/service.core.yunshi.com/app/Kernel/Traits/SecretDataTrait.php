<?php

namespace App\Kernel\Traits;

use App\Modules\Basics\Constant\Common\HidePolicyDataAttr;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;

trait SecretDataTrait
{
    /**
     * 获取加密配置
     *
     * @param string $secretType
     * @param string $webRoute
     * @return array
     * @author 秦昊
     * Date: 2021/7/19 19:43
     */
    public function getSecretAttrs(string $secretType, string $webRoute): array
    {
        $webRoute = str_replace('.', '_', $webRoute);

        return config("secret.$webRoute.$secretType", []);
    }

    /**
     * 根据加密级别对数据进行加密
     *
     * @param $data
     * @param string $secretType 加密级别
     * @return array
     * @author 秦昊
     * Date: 2021/7/18 14:06
     */
    public function secretData($data, string $secretType): array
    {
        if (!is_array($data))
        {
            return $data;
        }

        $webRoute = get_current_route_name() ?? '';

        info($webRoute);
        info("secret_type: $secretType");

        $secretAttrs = $this->getSecretAttrs($secretType, $webRoute);

        if (
            blank($secretType)
            || $secretType == EncryptionOption::SHOW_ALL
            || $secretAttrs === []
        ) {
            return $data;
        }

        if (count($secretAttrs) > 0)
        {
            // 根据加密配置进行加密
            return $this->secretWithConfig($data, $secretAttrs);
        }

        // 递归加密
        return $this->secretArr($data, $secretType);
    }

    /**
     * 根据加密配置进行加密
     *
     * @param array $data
     * @param array $secretAttrs
     * @return array
     * @author 秦昊
     * Date: 2021/7/18 18:11
     */
    private function secretWithConfig(array $data, array $secretAttrs): array
    {
        // 遍历加密字段配置
        foreach ($secretAttrs as $attrKey => $attrValue)
        {
            // 多维key
            if (is_array($attrValue))
            {
                $this->secretWithAttrs($data, $attrKey, $attrValue);
            }
            // 一维key
            else
            {
                $this->secretWithAttrStr($data, $attrKey, $attrValue);
            }
        }

        return $data;
    }

    /**
     * 根据多维配置，拆解数据
     *
     * @param array $data
     * @param $attrKey
     * @param $attrValue
     * @author 秦昊
     * Date: 2021/7/23 15:50
     */
    private function secretWithAttrs(array &$data, $attrKey, $attrValue)
    {
        // 对象数据
        if (array_has($data, $attrKey))
        {
            $this->secretObjWithAttrs($data, $attrKey, $attrValue);
        }
        // 对象数组
        else
        {
            // 先遍历数组
            foreach ($data as &$datum)
            {
                if (!$this->secretObjWithAttrs($datum, $attrKey, $attrValue))
                {
                    continue;
                }
            }
        }
    }

    /**
     * 当数据中获取不到目标字段时，遍历数据，递归处理
     *
     * @param $data
     * @param $attrValue
     * @param $dataKey
     * @author 秦昊
     * Date: 2021/7/22 23:38
     */
    private function secretWithAttrStr(&$data, $dataKey, $attrValue)
    {
        if (is_array($data))
        {
            // 对象数据
            if (array_has($data, $attrValue))
            {
                $this->secretObjWithAttrStr($data, $attrValue);
            }
            // 对象数组
            else
            {
                // 遍历对象
                foreach ($data as $datumKey => &$datum)
                {
                    // 递归处理
                    $this->secretWithAttrStr($datum, $datumKey, $attrValue);
                }
            }
        }
        else
        {
            if ($dataKey == $attrValue)
            {
                $data = $this->secretValue($data, $attrValue);
            }
        }
    }

    /**
     * 处理一维数据
     *
     * @param $obj
     * @param $attrValue
     * @return bool
     * @author 秦昊
     * Date: 2021/7/19 10:03
     */
    private function secretObjWithAttrStr(&$obj, $attrValue): bool
    {
        $originValue = array_get($obj, $attrValue);
        if (blank($originValue))
        {
            return false;
        }

        $secretValue = $this->secretValue($originValue, $attrValue);
        array_set($obj, $attrValue, $secretValue);

        return true;
    }

    /**
     * 处理多维数据
     *
     * @param $obj
     * @param $attrKey
     * @param $attrValueArr
     * @return bool
     * @author 秦昊
     * Date: 2021/7/19 09:44
     */
    private function secretObjWithAttrs(&$obj, $attrKey, $attrValueArr): bool
    {
        $objArr = array_get($obj, $attrKey);
        if (blank($objArr))
        {
            return false;
        }

        if (is_object($objArr) && method_exists($objArr, 'toArray'))
        {
            $objArr = $objArr->toArray();
        }

        // 递归处理
        $objArr = $this->secretWithConfig($objArr, $attrValueArr);
        array_set($obj, $attrKey, $objArr);

        return true;
    }

    /**
     * 直接递归加密
     *
     * @param array $arr
     * @param string $secretType
     * @return array
     * @author 秦昊
     * Date: 2021/7/18 14:06
     */
    private function secretArr(array $arr, string $secretType): array
    {
        foreach ($arr as $key => &$item)
        {
            if (is_array($item))
            {
                $item = $this->secretArr($item, $secretType);
            }
            else
            {
                // 若key值为需加密的字段，则进行加密操作
                if (is_string($key) && ends_with($key, HidePolicyDataAttr::showNone()))
                {
                    $hidePolicyDataAttrArr = HidePolicyDataAttr::showNone();
                    // 根据加密类型，获取需要加密的字段列表
                    switch ($secretType)
                    {
                        case EncryptionOption::SHOW_NONE:
                            $hidePolicyDataAttrArr = HidePolicyDataAttr::showNone();
                            break;

                        case EncryptionOption::SHOW_PART:
                            $hidePolicyDataAttrArr = HidePolicyDataAttr::showMobile();
                            break;

                        default:
                            break;
                    }

                    $item = $this->secretValue($item, $key, $hidePolicyDataAttrArr);
                }
            }
        }
        unset($item);

        return $arr;
    }

    /**
     * 对字段进行加密
     *
     * @param $obj
     * @param string $key
     * @param array|null $hidePolicyDataAttrArr
     * @param string|null $secretType
     * @return string
     * @author 秦昊
     * Date: 2021/7/18 14:05
     */
    private function secretValue($obj, string $key, array $hidePolicyDataAttrArr = null, string $secretType = null): string
    {
        if (filled($hidePolicyDataAttrArr) && !in_array($key, $hidePolicyDataAttrArr))
        {
            return $obj;
        }

        if ($secretType == EncryptionOption::SHOW_ALL)
        {
            return $obj;
        }

        // 当前字段类型
        $curHidePolicyDataType = $this->getCurHidePolicyDataType($key, $hidePolicyDataAttrArr);
        if (blank($curHidePolicyDataType))
        {
            return $obj;
        }

        return hide_policy_data($obj, $curHidePolicyDataType);
    }

    /**
     * 获取当前字段的加密方式
     *
     * @param $key
     * @param array|null $hidePolicyDataAttrArr
     * @return ?string
     * @author 秦昊
     * Date: 2021/7/23 15:21
     */
    private function getCurHidePolicyDataType($key, array $hidePolicyDataAttrArr = null): ?string
    {
        if (blank($hidePolicyDataAttrArr))
        {
            $hidePolicyDataAttrArr = HidePolicyDataAttr::showNone();
        }

        if ($pos = strpos($key, '.'))
        {
            $key = substr($key, $pos + 1);
        }

        // 先直接匹配加密规则
        $curHidePolicyDataType = array_get(HidePolicyDataAttr::getAttrDataMap(), $key);

        // 直接匹配不到时，使用后缀模糊匹配
        if ($curHidePolicyDataType == null)
        {
            foreach ($hidePolicyDataAttrArr as $hidePolicyDataAttr)
            {
                if (ends_with($key, $hidePolicyDataAttr))
                {
                    $curHidePolicyDataType = array_get(HidePolicyDataAttr::getAttrDataMap(), $hidePolicyDataAttr);
                    break;
                }
            }
        }

        return $curHidePolicyDataType;
    }
}
