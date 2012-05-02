<?php

class Bootstrap
{
    public $system;
    
    public $mode;
    
    public function __construct()
    {
        $this->system = dirname(__DIR__);
    }
    
    public function exec()
    {
        require $this->system . "/Bull/splClassLoader.php";
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
        Bull_Registry::set('config', function () use ($bootstrap) {
                $config=new Bull_Config_Ini();
                $config->load($bootstrap->system . "/Config/". $bootstrap->mode . ".ini");
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
        Bull_Registry::set('config', function () use ($bootstrap) {
                $config=new Bull_Config_Ini();
                $config->load($bootstrap->system . "/Config/". $bootstrap->mode . ".ini");
                return $config;
            });
    }
}