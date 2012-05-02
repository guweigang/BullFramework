<?php

define("ROOT", dirname(dirname(dirname(__FILE__))));
define("BULL_CONFIG_MODE", "dev");

require ROOT."/Bull/splClassLoader.php";

$classloader = new splClassLoader(null, ROOT);
$classloader->register();

$config = new Bull_Config_Yaml();

$config->load("./config.yaml");

var_dump($config->db->default->dsn);

var_dump($config->get('db.default.dsn'));

var_dump($config->use_namespace);


