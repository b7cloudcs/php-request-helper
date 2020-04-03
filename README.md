# PHP Request Helper

**A simple PHP request and response library**

PHP Request Helper 是一个简单的对PHP 请求和响应处理的类库

## 安装
```
composer require dialogueplay/php-request-helper
```

## 使用
```
<?php
require __DIR__.'/vendor/autoload.php';

PhpRequestHelper\Request
var_dump(Request::get("name", "default name"));

```

## 例子
除了可以查看 example 目录中的案例以外，还可以查看 *tiny-php-quick-start* 简单的应用案例
> https://github.com/dialogueplay/tiny-php-quick-start

## 类解析

#### Request 类
- query($key, $defaultValue="") 用来取值 URL 中“?”后的query请求参数
- input($key, $defaultValue="") 用来取值通过 FormData、Json、File 方式传入的数据
- raw() 相当于*file_get_contents('php://input')*，获取传入的内容
- get($key, $defaultValue="") query 和 input 方法的合集
- header($key, $defaultValue="") 获得 header
- cookie($key, $defaultValue="") 获得 cookie
- session($key, $defaultValue="") 获得 session

#### Response 类
- json($data, $httpCode=200, $CORS= true) json数据，默认**允许**跨域
- echo($data, $httpCode=200, $CORS= false) string 类型数据，默认**禁止**跨域

#### Helper 类
- valueFilter($value, $defaultValue = "") 值过滤器
- valueBoolFilter($value, $defaultValue = "") 布尔值过滤器，类似字符串形式的 "false"、"0" 和属性形式下的 0 都将被处理为 false

#### 另外支持的特性
- Request::get("room.0.name", "default name") 支持通过"." 符号取得数组类型数据的下级内容



