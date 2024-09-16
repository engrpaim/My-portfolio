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

$recognizedPages = array("portfolio");

in_array($requestedRoute, $recognizedPages) or $_GET['route'] == '' ? $_GET['route'] : include 'views/404.php';
$router->dispatch($requestedRoute);
