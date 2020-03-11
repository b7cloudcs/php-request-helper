<?php

error_reporting(-1);
ini_set('display_errors', 1);

use PhpRequestHelper\Helper;
use PhpRequestHelper\Request;
use PhpRequestHelper\Response;

echo '<h1>PhpRequestHelper Example</h1>';

echo '<h2>valueFilter</h2>';



// echo "null, \"defaultvalue\"".print_r(Helper::valueFilter(null, "defaultvalue")).'<br>';

$d = Helper::valueFilter("asdf", "defaultvalue");


var_dump($d);