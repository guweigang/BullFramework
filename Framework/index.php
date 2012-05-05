<?php
define("ROOT", dirname(__DIR__));

require_once(ROOT . DIRECTORY_SEPARATOR . "Framework"
             . DIRECTORY_SEPARATOR ."Bootstrap.php");

$bootstrap = new Bootstrap();

$bootstrap->execWeb();
