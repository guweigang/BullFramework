<?php

class Framework_Web_Home extends Bull_Web_Controller
{
    public function actionIndex()
    {
        $this->data->hello = "hello, world!";
    }
}