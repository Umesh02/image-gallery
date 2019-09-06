<?php

class Application {
    protected $controller = 'imageController';
    protected $action = 'index';
    protected $show404 = true;

    function __construct() {

        $this->parseURL();

        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            if(method_exists($this->controller, $this->action)) {
                $this->controller = new $this->controller;
                call_user_func_array([$this->controller, $this->action], []);
                $this->show404 = false;
            } 
        }

        if ($this->show404) {
                echo "404, not found";
            }

    }

    private function parseURL() {

        $request = trim($_SERVER['REQUEST_URI'], '/');
        // echo $request;
       
        if (!empty($request)) {

            $url = explode('/', $request);
            // var_dump($url);

            if ($url) {

                $this->controller = $url[4] . 'Controller';
                $this->action = isset($url[5]) ? $url[5] : $this->action;

            }
         }
       
    }
}