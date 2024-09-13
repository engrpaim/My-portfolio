<?php

require 'Router.php';

$router = new Router();


$router->addRoute('portfolio', function () {
    include 'views/Main.php';
});



$router->addRoute('404', function () {
    include 'views/404.php';
});


$requestedRoute = isset($_GET['route']) ? $_GET['route'] : 'portfolio';
var_dump($requestedRoute);

$router->dispatch($requestedRoute);
var_dump($router);
