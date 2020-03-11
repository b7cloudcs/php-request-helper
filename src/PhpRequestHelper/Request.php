<?php

namespace PhpRequestHelper;

class Request
{
    /**
     * 处理URL中 query 值
     * @example http://example.com/index.php?group=1&tag=example get
     * @param [type] $key
     * @param string $defaultValue
     * @return void
     */
    static public function query($key, $defaultValue="11111")
    {
        // get value
        return Helper::valueFilter(
            isset($_GET[$key])? $_GET[$key]: null,
            $defaultValue
        );
    }




}