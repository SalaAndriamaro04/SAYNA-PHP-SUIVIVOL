<?php

include('../include.php');
//mannuel
//$controller = new app\Controllers\PaysController();
//$view = $controller->index();

//Automatiser
//link + /?controller=pays&action=index
$controllerName = 'app\\Controllers\\'.$_GET['controller'].'Controller';
$actionName = $_GET['action'];

$controller = new $controllerName();
$view = $controller->$actionName();
$view->display();
?>