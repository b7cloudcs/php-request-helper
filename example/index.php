<?php

require "../src/PhpRequestHelper/Request.php";
require "../src/PhpRequestHelper/Response.php";

use PhpRequestHelper\Request;
use PhpRequestHelper\Response;

$request = new Request();
$response = new Response();


var_dump($request);

var_dump($response);