<?php

define("ROOT", dirname(dirname(__DIR__)));
define("BULL_CONFIG_MODE", "defalut");

require ROOT . "/Framework/Bootstrap.php";
$bootstrap = new Bootstrap();
$bootstrap->execCli();

$ini = array(
    'error_reporting' =>  E_ALL | E_STRICT,
    'error_display'   =>  1,
    'html_errors'     =>  0,
);

$shortopts  = ""; 
$shortopts .= "c:";  // Db config prefix for short
$shortopts .= "t:";  // Table name for short
$shortopts .= "m::"; // Model name for short

$command = new Bull_Cli_Command($shortopts);

$command->getOpt()->checkParams();

$params = $command->getOpt()->get();

$php = new Bull_Cli_Php(array('mode' => 'default', 'root' => ROOT));


$code = <<<'EOF'

$name  = isset($argv[1])?$argv[1]:null;
$table = isset($argv[2])?$argv[2]:null;
$model = isset($argv[3])?$argv[3]:null;

$db = Bull_Di_Container::newInstance('Bull_Db_Front');
$config = Bull_Di_Container::get('config');

$db->setServer(array($name => $config->get($name)));

$objGen = new Bull_Model_Generate($name, $db->getConnect($name), $config->system->directory, $config->model->directory);
$objGen->execute($table, $model);
    
EOF;

$php->setIniFile('/etc/httpd/php.ini')
    ->setIniArray($ini)
    ->setArgv($params)
    ->runBullCode($code);
