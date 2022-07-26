<?php
// use homeController;
$controller='home';
$function='home';
if(isset($_GET['controller']) && $_GET['controller']!=''){
    $controller=$_GET['controller'];
}
if(isset($_GET['function']) && $_GET['function']!=''){
    $function=$_GET['function'];
}
if(file_exists('/var/www/abc~/mvc/controller/'.$controller . '.php')){
include('/var/www/abc~/mvc/controller/'.$controller . '.php');
$class=$controller."Controller";
$obj=new $class();
if(method_exists($class,$function)){
$obj->$function();
}
else{
 echo "function nott";
}
}
else{
    echo "controller not found";
}
?>