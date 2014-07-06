<?php
namespace homePage\util;

class Router
{
    private $uri;

    public function __construct($uri)
    {
        $this->uri = $uri;
        $this->route();
    }

    private function route()
    {
        $coordinates = explode('/', $this->uri);
        $controllerName = $this->getControllerName($coordinates);

        if ($controllerName!='') {
            $controllerName = "\homePage\controller\\".ucfirst($controllerName);
            
            if (class_exists($controllerName)) {
                $this->goByPlottetRoute(new $controllerName());
            } else {
                $this->goHome();
            }
        } else {
            $this->goHome();
        }
    }

    private function getControllerName($coordinates)
    {
        return $coordinates['1'];
    }

    private function goHome()
    {
        header("Location: http://".$_SERVER['HTTP_HOST']."/home");
        die();
    }

    private function goByPlottetRoute($controller)
    {
        $controller->init();
    }
}
