<?php

namespace app\controllers;
use framework\sessions\Session;
use framework\templeater\Templeater;

class ProfileController
{
    public array $counter = [];

    public function Index()
    {
        $file = file("count.txt");
        $count = implode("", $file);
        $count++;
        $myfile = fopen("count.txt", "w");
        fputs($myfile, $count);
        fclose($myfile);

        if (!$this->checkExistence())
        {
            $file = file("countUnique.txt");
            $count = implode("", $file);
            $count++;
            $myfile = fopen("countUnique.txt", "w");
            fputs($myfile, $count);
            fclose($myfile);

            $filename = "countSessions.txt";
            $somecontent = session_id() . "\n";
            $handle = fopen($filename, 'a');
            fwrite($handle, $somecontent);
        }

        $templeater = new Templeater();
        $template = 'profileTpl';
        $layout = 'profile';
        $templeater->renderContent($template, $layout);
    }

    public function checkExistence()
    {
        $fd = fopen("countSessions.txt", 'r');
        while(!feof($fd))
        {
            $str = htmlentities(fgets($fd));
            if ($str == session_id(). "\n")
            {
                fclose($fd);
                return true;
            }
        }
        fclose($fd);
        return false;
    }
}