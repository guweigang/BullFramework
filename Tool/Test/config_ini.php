<?php

define("ROOT", dirname(dirname(__DIR__)));
define("BULL_CONFIG_MODE", "default");

require ROOT. "/Framework/Bootstrap.php";
$bootstrap = new Bootstrap();
$bootstrap->execCli();

$config = Bull_Registry::get('config');

var_dump($config->db->default->dsn);

var_dump($config->get('db.default.dsn'));

var_dump($config->model->directory);