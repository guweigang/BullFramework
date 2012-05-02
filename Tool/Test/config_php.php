<?php

define("ROOT", dirname(dirname(__DIR__)));
define("BULL_CONFIG_MODE", "dev");

require ROOT."/Bull/splClassLoader.php";

$classloader = new splClassLoader(null, ROOT);
$classloader->register();

$config = new Bull_Config_Php();

$config->load("./config.php");

var_dump($config->get("db.default"));

var_dump($config->model);


