<?php
class Framework_Web_Test extends Framework_Controller
{
    public function preConstruct()
    {
        $this->defaction = "test";
    }

    public function postConstruct()
    {
        $this->view->setCache(FRAMEWORK."/Tmp/cache/view");
    }
    
    public function actionTest($id)
    {
        // $this->disableView();
        // $this->setView("test2");
        echo "Get Param id: ". $id . PHP_EOL;
        echo "hello." . PHP_EOL;
        $this->data->fuck = "you mother fuckers.";
    }

    public function actionTest2()
    {
    }
}