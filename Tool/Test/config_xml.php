<?php

define("ROOT", dirname(dirname(dirname(__FILE__))));
define("BULL_CONFIG_MODE", "dev");

require ROOT."/Bull/splClassLoader.php";

$classloader = new splClassLoader(null, ROOT);
$classloader->register();

$config = new Bull_Config_Xml();

$config->load("./config.xml");

var_dump($config->get("db.default"));

var_dump($config->db->default);


