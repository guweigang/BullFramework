<?php

define("ROOT", dirname(dirname(__DIR__)));
define("BULL_CONFIG_MODE", "dev");

require ROOT. "/Framework/Bootstrap.php";
$bootstrap = new Bootstrap();
$bootstrap->execCli();

$config = new Bull_Config_Php();

$config->load("Tool/Test/config.php");

var_dump($config->get("db.default"));

var_dump($config->model);


