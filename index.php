<?php

$action = $_GET["action"];
$controller = $_GET["controller"];



spl_autoload_register(function (string $class_name)
{
    require "src/".str_replace("\\","/", $class_name). ".php";
})

$router = new Framework\Router;

$router->add("/home/index", ["controller"=>"home", "action"=>"index"]);
$router->add("products", ["controller"=>"products", "action"=>"index"]);
$router->add("/", ["controller"=>"home", "action"=>"index"]);

$params = $router->match($path);

if ($params === false)
{
    exit("No route found");
}

$action = $params["action"]
$controller = "App\Controllers\\". ucwords($params["controller"]);

$controller_object = new $controller;

$controller_object->$action(); 