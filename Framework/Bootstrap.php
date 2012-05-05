<?php

class Bootstrap
{
    /* 系统路径 */
    public $system;
    
    /* 配置模式 */
    public $mode;

    /* 构造器 */
    public function __construct()
    {
        $this->system = dirname(__DIR__);
    }
    
    public function exec()
    {
        set_include_path(get_include_path(). PATH_SEPARATOR . $this->system);
        
        require_once("Bull" . DIRECTORY_SEPARATOR . "Util" .
                     DIRECTORY_SEPARATOR . "splClassLoader.php");
        
        $classloader = new splClassLoader(null, $this->system);
        $classloader->register();
    }

    public function execWeb()
    {
        $this->exec();
        
        $this->mode   = empty($_ENV['BULL_CONFIG_MODE'])
            ? 'default'
            : $_ENV['BULL_CONFIG_MODE'];

        $bootstrap = $this;
        Bull_Di_Container::set('config', function () use ($bootstrap) {
                $config=new Bull_Config_Ini();
                $config->load($bootstrap->system . DIRECTORY_SEPARATOR
                              . "Config". DIRECTORY_SEPARATOR . $bootstrap->mode . ".ini");
                return $config;
            });
    }

    public function execCli()
    {
        $this->exec();

        $this->mode = defined("BULL_CONFIG_MODE")
            ? BULL_CONFIG_MODE
            : "default";
        
        $bootstrap = $this;
        Bull_Di_Container::set('config', function () use ($bootstrap) {
                $config=new Bull_Config_Ini();
                $config->load($bootstrap->system . DIRECTORY_SEPARATOR
                              . "Config". DIRECTORY_SEPARATOR . $bootstrap->mode . ".ini");
                return $config;
            });
    }
}
