<?php

error_reporting(-1);
ini_set('display_errors', 1);

require __DIR__.'/../vendor/autoload.php';

// Uses ..
use PhpRequestHelper\Response;
use PhpRequestHelper\TestObject;

// json data
Response::json(["error_code"=>0, "message"=> ""]);

// 发送响应后，后边的响应将不能被继续执行

Response::json(new TestObject(), 404);

Response::json('{"error_code":0,"message":""}');

Response::json('asdf');

// json data
Response::echo("123123123", 200);
