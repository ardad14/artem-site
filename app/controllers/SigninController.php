<?php

namespace app\controllers;

use framework\templeater\Templeater;

class SigninController
{
    public function Index()
    {
        $templeater = new Templeater();
        $template = 'signinTpl';
        $layout = 'signin';
        $templeater->renderContent($template, $layout);
    }
}