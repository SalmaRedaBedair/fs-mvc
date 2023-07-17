<?php
namespace MVC\core;

class app
{
    private $controller;
    private $method;
    private $params;
    public function __construct()
    {
        $this->url();
        $this->render();
    }
    private function url()
    {
        if (!empty($_SERVER['QUERY_STRING'])) {
            $url = explode('/', $_SERVER['QUERY_STRING']);
            $this->controller = isset($url[0]) ? $url[0] . 'controller' : 'homecontroller';
            $this->method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = array_values($url); // to make params start from index zero
        } else {
            $this->controller = 'homecontroller';
            $this->method = 'index';
            $this->params = array();
        }

    }
    private function render()
    {
        $controllerName = "MVC\controllers\\" . $this->controller;
        if (class_exists($controllerName)) {
            $controller = new $controllerName();
            if (method_exists($controller, $this->method)) {
                call_user_func_array([$controller, $this->method], $this->params);
            } else {
                echo 'method not exist';
            }
        } else {
            echo "class not exist";
        }
    }
}
?>