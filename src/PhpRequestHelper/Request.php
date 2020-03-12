<?php

namespace PhpRequestHelper;

class Request
{
    /**
     * query
     * @example http://example.com/index.php?group=1&tag=example get
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function query($key, $defaultValue="")
    {
        // return
        return self::subValue($_GET, $key, $defaultValue);
    }

    /**
     * input
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function input($key, $defaultValue="")
    {
        // Content-Type = application/json
        $jsonData = json_decode(self::raw(), true);
        $jsonData = is_array($jsonData)? $jsonData: [];

        // data merge
        $input = array_merge($jsonData, $_POST, $_FILES);

        // return
        return self::subValue($input, $key, $defaultValue);

    }

    /**
     * input raw
     * @return void
     */
    static public function raw()
    {
        return file_get_contents('php://input');
    }

    /**
     * get
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function get($key, $defaultValue="")
    {
        // 同时获取 query 和 input
        $queryValue = self::query($key, $defaultValue);
        $inputValue = self::input($key, $defaultValue);

        // 返回不同于默认值的值
        return ($queryValue != $defaultValue)
                ? $queryValue
                : $inputValue;

    }

    /**
     * header
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function header($key, $defaultValue="")
    {
        return Helper::valueFilter(
            isset(getallheaders()[$key])? getallheaders()[$key]: null,
            $defaultValue
        );
    }

    /**
     * cookie
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function cookie($key, $defaultValue="")
    {
        return Helper::valueFilter(
            isset($_COOKIE[$key])? $_COOKIE[$key]: null,
            $defaultValue
        );
    }

    /**
     * session
     * @param string $key
     * @param all $defaultValue
     * @return void
     */
    static public function session($key, $defaultValue="")
    {
        return Helper::valueFilter(
            isset($_SESSION[$key])? $_SESSION[$key]: null,
            $defaultValue
        );
    }


    /**
     * subValue
     *
     * @param [type] $data
     * @param string $key
     * @param string $defaultValue
     * @return void
     */
    static public function subValue($data, $key = "", $defaultValue = "")
    {
        $keys = explode('.', $key);

        // each sub
        foreach ($keys as $oneKey) {
            $data = isset($data[$oneKey])? $data[$oneKey]: null;
        }

        // return
        return Helper::valueFilter($data, $defaultValue);

    }

}