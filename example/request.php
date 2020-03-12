<?php

session_start();
error_reporting(-1);
ini_set('display_errors', 1);

// 加入测试session
$_SESSION['token'] = "123123";

require __DIR__.'/../vendor/autoload.php';

// Uses ..
use PhpRequestHelper\Request;

function var_dump_pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
}

?>

<html>
<head>
<style>
.pre{ margin: 10px 0; padding: 5px 20px; background: #f2f2f2; border-radius: 10px; font-size: 14px; }
pre{
    white-space: pre-wrap!important;
    word-wrap: break-word!important;
    *white-space:normal!important;
}
</style>
</head>
<body>
<div style="width: 700px; margin: 0 auto;">

<h1>Request Example</h1>

<h2>Query</h2>
<div class="pre">
    <p>Request::query($key="param", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::query("param")); ?>
</div>

<div class="pre">
    <p>Request::query($key="param", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::query("param", "defaultValue")); ?>
</div>

<div class="pre">
    <p>Request::query($key="param", $defaultValue=[]array,)</p>
    <?php var_dump_pre(Request::query("param", ["a"=>"b"])); ?>
</div>

<h2>Input FormData & Json</h2>
<div class="pre">
    <p>Request::input($key="name", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::input("name")); ?>
</div>
<div class="pre">
    <p>Request::input($key="name", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::input("name")); ?>
</div>
<div class="pre">
    <p>Request::input($key="name", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::input("name", "defaultValue")); ?>
</div>

<h2>Get Query & FormData & Json</h2>
<div class="pre">
    <p>Request::get($key="user.0.name", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::get("user.0.name")); ?>
</div>
<div class="pre">
    <p>Request::get($key="name", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::get("name")); ?>
</div>
<div class="pre">
    <p>Request::get($key="name", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::get("name")); ?>
</div>
<div class="pre">
    <p>Request::get($key="name", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::get("name", "defaultValue")); ?>
</div>


<h2>Header</h2>
<div class="pre">
    <p>Request::header($key="User-Agent", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::header("User-Agent")); ?>
</div>
<div class="pre">
    <p>Request::header($key="ABC", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::header("ABC")); ?>
</div>
<div class="pre">
    <p>Request::header($key="ABC", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::header("ABC", "defaultValue")); ?>
</div>

<h2>Cookie</h2>
<div class="pre">
    <p>Request::cookie($key="token", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::cookie("token")); ?>
</div>
<div class="pre">
    <p>Request::cookie($key="ABC", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::cookie("ABC")); ?>
</div>
<div class="pre">
    <p>Request::cookie($key="ABC", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::cookie("ABC", "defaultValue")); ?>
</div>

<h2>Session</h2>
<div class="pre">
    <p>Request::session($key="token", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::session("token")); ?>
</div>
<div class="pre">
    <p>Request::session($key="ABC", $defaultValue=[dot hava])</p>
    <?php var_dump_pre(Request::session("ABC")); ?>
</div>
<div class="pre">
    <p>Request::session($key="ABC", $defaultValue="defaultValue",)</p>
    <?php var_dump_pre(Request::session("ABC", "defaultValue")); ?>
</div>


<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

</div>
</body>
</html>