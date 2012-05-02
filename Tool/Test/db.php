<?php

define("ROOT", dirname(dirname(dirname(__FILE__))));
define("BULL_CONFIG_MODE", "default");

require ROOT."/Bull/splClassLoader.php";

$classloader = new splClassLoader(null, ROOT);
$classloader->register();

$config = new Bull_Config_Ini();

$config->load(ROOT."/Config/". BULL_CONFIG_MODE . ".ini");

Bull_Db::factory("db", $config->get("db"));
Bull_Db::factory("dbtemp", $config->get("dbtemp"));

Bull_Db::getConnect('db');
$sql = Bull_Db::query('select user_id, user_type, group_id from phpbb_users limit 1');
var_dump($sql->fetchAll());

Bull_Db::getConnect('dbtemp');
$sql = Bull_Db::query('select ID, user_login from wp_users limit 1');
var_dump($sql->fetchAll());

Bull_Db::getConnect('db');
$sql = Bull_Db::query('select user_id, user_type, group_id from phpbb_users limit 1');
var_dump($sql->fetchAll());