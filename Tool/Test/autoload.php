<?php

define("ROOT", dirname(dirname(dirname(__FILE__))));

require ROOT."/Bull/splClassLoader.php";

$classloader = new splClassLoader(null, ROOT);
$classloader->register();

echo Bull_Locale::get('INVALID_RANGE');

echo PHP_EOL;

$test = new Framework_Web_Test();

$test->test();