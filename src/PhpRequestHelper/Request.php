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
        return Helper::valueFilter(
            isset($_GET[$key])? $_GET[$key]: null,
            $defaultValue
        );
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
     * input raw
     * @return void
     */
    static public function raw()
    {
        return file_get_contents('php://input');
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
        $inputs = array_merge($jsonData, $_POST, $_FILES);

        // return
        return Helper::valueFilter(
            isset($inputs[$key])? $inputs[$key]: null,
            $defaultValue
        );
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

}