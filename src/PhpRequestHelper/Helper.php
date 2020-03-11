<?php

namespace PhpRequestHelper;

class Helper
{
    
    /**
     * 值过滤器
     * 如果 $defaultValue 传入为 bool 类型值，返回值会强制转化为 bool
     * @param [string] $value 传入值
     * @param [string | digit | bool] $defaultValue 默认值
     * @return [string]
     */
    static public function valueFilter($value, $defaultValue)
    {



        // // 默认值赋值
        // $value = ($value != null || $value != "")
        //             ? $value
        //             : $defaultValue;

        
            
       
        // var_dump($value);


        return $value;
    }
    


}