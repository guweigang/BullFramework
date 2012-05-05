<?php

class Framework_Web_Test extends Bull_Web_Controller
{
    public $config;

    public $hello;
    
    public $world;
    
    public function __construct($hello, $world)
    {
        $this->hello = $hello;
        $this->world = $world;
        
    }
    
    public function test($foo)
    {
        echo "Test with all of it" . PHP_EOL;
        echo "Setter Config Value: ". $foo . PHP_EOL;
    }

    public function test2(Bull_Config_Ini $config)
    {
        $this->config = $config;

        // var_dump($this->config->class);
    }

    public function helloworld() {
        echo PHP_EOL;
        echo $this->hello .", ". $this->world;
    }
}