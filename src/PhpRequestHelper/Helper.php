<?php

namespace PhpRequestHelper;

class Helper
{
    
    /**
     * 值过滤器
     * @param [string] $value 传入值
     * @param [*] $defaultValue 默认值
     * @return [string]
     */
    static public function valueFilter($value, $defaultValue = "")
    {
        // return
        return (
            !empty($value) ||
            is_numeric($value) || 
            $value === false || 
            $value === []
        )? $value: $defaultValue;
    }

    /**
     * Bool值过滤器
     * $defaultValue 默认为 null
     * @param [string] $value 传入值
     * @return [string]
     */
    static public function valueBoolFilter($value)
    {
        // 过滤值
        $value = self::valueFilter($value, false);

        // false 特殊类型过滤
        if(
            (is_numeric($value) && $value == 0) || 
            (gettype($value) == "string" && $value=="false")
        ){
            $value = false;
        }

        // 转化
        return !empty($value);
    }

}