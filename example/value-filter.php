<?php

error_reporting(-1);
ini_set('display_errors', 1);

require __DIR__.'/../vendor/autoload.php';

// Uses ..
use PhpRequestHelper\Helper;

class TestObject
{
    public $key1 = "key1";
    public $key2 = "key2";
}

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

<h1>Value Filter Example</h1>

<h2>valueFilter</h2>
<div class="pre">
    <p>Helper::valueFilter($value=null,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(null, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="0",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("0", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="0.0",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("0.0", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=0,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(0, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=0.0,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(0.0, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=1,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(1, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="[]",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("[]", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="{}",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("{}", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="false",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("false", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="true",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("true", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=false,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(false, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=true,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(true, "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value="abc",$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter("abc", "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value=[]array,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter([], "defaultValue")); ?>
</div>
<div class="pre">
    <p>Helper::valueFilter($value={}object,$defaultValue="defaultValue")</p>
    <?php var_dump_pre(Helper::valueFilter(new TestObject(), "defaultValue")); ?>
</div>

<br>
<h2>valueBoolFilter</h2>
<div class="pre">
    <p>Helper::valueBoolFilter($value=null)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(null)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=""))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="0"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("0")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="0.0"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("0.0")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=0)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(0)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=0.0)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(0.0)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=1)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(1)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="[]"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("[]")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="{}"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("{}")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="false"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("false")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="true"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("true")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=false)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(false)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=true)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(true)); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value="abc"))</p>
    <?php var_dump_pre(Helper::valueBoolFilter("abc")); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value=[]array)</p>
    <?php var_dump_pre(Helper::valueBoolFilter([])); ?>
</div>
<div class="pre">
    <p>Helper::valueBoolFilter($value={}object)</p>
    <?php var_dump_pre(Helper::valueBoolFilter(new TestObject())); ?>
</div>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

</div>
</body>
</html>