<?php

define("ROOT", __DIR__);
require_once(ROOT . DIRECTORY_SEPARATOR . "Framework" .
             DIRECTORY_SEPARATOR . "Bootstrap.php");

$bootstrap = new Bootstrap();
$bootstrap->execWeb();

$di = 'Bull_Di_Container';
$test = $di::set('test',
                 function() use ($di) {
                     return $di::newInstance("Framework_Web_Test",
                                             array(),
                                             array("test" => "Fuck, World!"));});
$di::get('test')->helloworld();
