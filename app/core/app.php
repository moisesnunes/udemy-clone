<?php

class App
{
    protected $controller = '_404';
    protected $method = 'index';

    function __construct()
    {
        $array = $this->getUrl();
        $filename = "../app/controllers/" . ucfirst($array[0]) . ".php";
        if (file_exists($filename)) {
            require $filename;
            $this->controller = $array[0];
            unset($array[0]);
        } else {
            require "../app/controllers/" . $this->controller . ".php";
        }
        $myController = new $this->controller();

        $myMethod = $array[1] ?? $this->method;

        if (!empty($array[1])) {
            if (method_exists($myController, strtolower($myMethod))) {
                $this->method = strtolower($myMethod);
                unset($array[0]);
            }
        }
        $array = array_values($array);
        call_user_func_array([$myController, $this->method], $array);
    }

    private function getUrl()
    {
        $url = $_GET['url'] ?? 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $array = explode("/", $url);
        return $array;
    }
}