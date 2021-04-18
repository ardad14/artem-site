<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once '../framework/config/autoloader.php';
    require_once '../framework/config/routes.php';

    use framework\router\Router;
    use framework\sessions\Session;

    $session = new Session();
    $session->start();

    $router = new Router();
    $router->matchRoute();
