<?php


require_once __DIR__ . '/autoload.php';


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'News';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';

$controllerClassName = $ctrl . 'Controller';

try{
    $controller = new $controllerClassName;

    $method = 'action'.$act;
    $controller->$method();
}
catch(Exception $e){

    $view = new View;
    $view->error = $e;

    ModelException::logg($e);
    $view->display('/../admin/error.php');
}