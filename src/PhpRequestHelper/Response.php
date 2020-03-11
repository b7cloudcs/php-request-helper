<?php

namespace PhpRequestHelper;

class Response
{
    /**
     * 系统默认的 http code 码
     */
    static public $HTTP_CODES = [
            // Informational 1xx
            100 => 'Continue',
            101 => 'Switching Protocols',
            // Success 2xx
            200 => 'OK',
            201 => 'Created',
            202 => 'Accepted',
            203 => 'Non-Authoritative Information',
            204 => 'No Content',
            205 => 'Reset Content',
            206 => 'Partial Content',
            // Redirection 3xx
            300 => 'Multiple Choices',
            301 => 'Moved Permanently',
            302 => 'Moved Temporarily ',  // 1.1
            303 => 'See Other',
            304 => 'Not Modified',
            305 => 'Use Proxy',
            // 306 is deprecated but reserved
            307 => 'Temporary Redirect',
            // Client Error 4xx
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            406 => 'Not Acceptable',
            407 => 'Proxy Authentication Required',
            408 => 'Request Timeout',
            409 => 'Conflict',
            410 => 'Gone',
            411 => 'Length Required',
            412 => 'Precondition Failed',
            413 => 'Request Entity Too Large',
            414 => 'Request-URI Too Long',
            415 => 'Unsupported Media Type',
            416 => 'Requested Range Not Satisfiable',
            417 => 'Expectation Failed',
            // Server Error 5xx
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            509 => 'Bandwidth Limit Exceeded'
    ];

    /**
     * json
     * @param array $data
     * @param integer $httpCode
     * @param boolean $CORS
     * @return void
     */
    static public function json($data, $httpCode=200, $CORS= true)
    {
        // 默认data
        $returnData = [];

        // 是数组
        if(is_array($data) || is_object($data)){
            $returnData = $data;
        }elseif(is_string($data)){
            $jsonData = @json_decode($data, true);
            $returnData = is_array($jsonData)? $jsonData: ['json'=> $data];
        }

        // reutrn
        header('Content-type:text/json');
        if($CORS) header("Access-Control-Allow-Origin:*");
        header('HTTP/1.1 '.$httpCode.' '.self::$HTTP_CODES[$httpCode]);
        header('Status:'.$httpCode.' '.self::$HTTP_CODES[$httpCode]);
        @exit(json_encode($returnData));
    }

    /**
     * echo
     * @param array $data
     * @param integer $httpCode
     * @return void
     */
    static public function echo($data, $httpCode=200, $CORS= false)
    {
        // reutrn
        if($CORS) header("Access-Control-Allow-Origin:*");
        header('HTTP/1.1 '.$httpCode.' '.self::$HTTP_CODES[$httpCode]);
        header('Status:'.$httpCode.' '.self::$HTTP_CODES[$httpCode]);
        @exit($data);
    }
    
}