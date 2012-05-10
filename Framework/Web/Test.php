<?php

class Framework_Web_Test extends Bull_Web_Controller
{
    public $config;

    public $hello;
    
    public $world;
    
    public function actionTest($foo)
    {
        echo "Test with all of it" . PHP_EOL;
        echo "Setter Config Value: ". $foo . PHP_EOL;
        $this->data->fuck = "you mother fuckers.";
    }

    public function test2(Bull_Parse_Ini $config)
    {
        $this->config = $config;

        // var_dump($this->config->class);
    }

    public function helloworld() {
        echo PHP_EOL;
        echo $this->hello .", ". $this->world;
    }
}