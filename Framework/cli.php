<?php
define("ROOT", dirname(__DIR__));
define("BULL_CONFIG_MODE", "default");

require_once(ROOT . DIRECTORY_SEPARATOR . "Framework"
             . DIRECTORY_SEPARATOR ."Bootstrap.php");

$bootstrap = new Bootstrap();

$bootstrap->execCli();
