<?php

use framework\router\Router;

//----------------Main------------------------
Router::addRoute('^$', [
    'controller' => 'Main',
    "action" => "Index"
]);

Router::addRoute('^main$', [
    'controller' => 'Main',
    "action" => "Index"
]);

Router::addRoute('^profile$', [
    'controller' => 'Profile',
    "action" => "Index"
]);

Router::addRoute('^signin$', [
    'controller' => 'signin',
    "action" => "Index"
]);