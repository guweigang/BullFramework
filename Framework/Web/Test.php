<?php

class Framework_Web_Test extends Bull_Web_Controller
{
    public $config;

    public function actionTest($foo)
    {
        echo $foo;
        echo "hello." . PHP_EOL;
        $this->data->fuck = "you mother fuckers.";
    }

    public function actionTest2(Bull_Parse_Ini $config)
    {
        $this->config = $config;
    }
}