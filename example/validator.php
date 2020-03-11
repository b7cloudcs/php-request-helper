<?php

error_reporting(-1);
ini_set('display_errors', 1);

require __DIR__.'/../vendor/autoload.php';

// Uses ..
use PhpRequestHelper\Helper;

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

<h1>Helper Example</h1>

<h2>validator</h2>
<div class="pre">
    <p>Helper::validator("asdfsdf", 'email', 'error email address')</p>
    <?php var_dump_pre(Helper::validator("asdfsdf", 'email', 'error email address')); ?>
</div>

<div class="pre">
    <p>Helper::validator([$value1, $value2], ['email', 'email'], ['error_message','error_message'])</p>
    <?php var_dump_pre(Helper::validator(12, true)); ?>
</div>



<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

</div>
</body>
</html>