<?php

class Framework_Web_Home extends Framework_Controller
{
    public function actionIndex()
    {
        $this->data->hello = "hello, world!";
    }
}