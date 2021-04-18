<?php

namespace app\controllers;

require_once "../framework/templeater/Templeater.php";
use framework\templeater\Templeater;

class MainController
{
    public function Index()
    {
        $templeater = new Templeater();
        $template = 'mainTpl';
        $layout = 'main';
        $templeater->renderContent($template, $layout);
    }
}