<?php
define("ROOT", dirname(__DIR__));
require ROOT . "/Framework/Bootstrap.php";

$bootstrap = new Bootstrap();
$bootstrap->execWeb();
