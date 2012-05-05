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

$php = new Bull_Cli_Php(array('mode' => 'default', 'root' => ROOT));


$code = <<<'EOF'

Bull_Di_Container::set('db', Bull_Di_Container::newInstance('Bull_Db_Front'));

Bull_Di_Container::get('db')->setServer('db');
Bull_Di_Container::get('db')->setServer('dbtemp');

$model = Framework_Web_Model_Db_PhpbbAclGroups::getInstance();
var_dump($model->selectOne());

$model = Framework_Web_Model_Dbtemp_WpUsers::getInstance();
var_dump($model->selectOne());
    
EOF;

$php->setIniFile('/etc/httpd/php.ini')
    ->setIniArray($ini)
    ->runBullCode($code);
