<?php
class Framework_Web_Test extends Bull_Web_Controller
{
    public function preConstruct()
    {
        $this->defaction = "test";
    }

    public function postConstruct()
    {
        $this->view->setCache(FRAMEWORK."/Tmp/cache/view");
    }
    
    public function actionTest($foo)
    {
        // $this->disableView();
        // $this->setView("test2");
        echo $foo;
        echo "hello." . PHP_EOL;
        $this->data->fuck = "you mother fuckers.";
    }

    public function actionTest2()
    {
    }
}