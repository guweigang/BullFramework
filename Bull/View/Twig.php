<?php

class Bull_View_Twig extends Bull_View_Abstract
{
    public function renderString($str)
    {
        $loader = new Twig_Loader_String();
        $twig   = new Twig_Environment($loader);
        return $twig->render($str, $this->data);
    }

    public function render($action, array $params = array())
    {
        $action = ucfirst(strtolower($action));
        $file = "{$action}.html";
        $loader = new Twig_Loader_Filesystem($this->path);
        $twig   = new Twig_Environment($loader, $params);
        return $twig->render($file, $this->data);
    }

    public function displayString($str)
    {
        $loader = new Twig_Loader_String();
        $twig   = new Twig_Environment($loader);
        $twig->display($str, $this->data);
    }

    public function display($action, array $params = array())
    {
        $action = ucfirst(strtolower($action));
        $file = "{$action}.html";
        $loader = new Twig_Loader_Filesystem($this->path);
        $twig   = new Twig_Environment($loader, $params);
        ob_start();
        $twig->display($file, $this->data);
        return ob_get_clean();
    }
}
