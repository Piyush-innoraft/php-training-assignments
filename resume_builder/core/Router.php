<?php
namespace app\core;

class Router{
    public Request $request;
    protected array $routes = [];
    public function __construct(\app\core\Request $request)
    {
        $this->request=$request;
    }
    public function get($path,$callback){
        $this->routes['get'][$path] = $callback;
    }
    public function resolve(){
    $path=$this->request->getpath();
    $method=$this->request->getmethod();
    $callback=$this->routes[$method][$path] ?? false;
    // echo "<pre>";
    // var_dump($callback);
    // echo "</pre>";
    if($callback == false){
        echo "Not found";
        exit;

    }
    echo call_user_func($callback);
    }

}