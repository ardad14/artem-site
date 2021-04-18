<?php

namespace framework\templeater;

class Templeater
{
    public function renderContent($template, $layout)
    {
        $layouts = __DIR__ . "/../../app/view/layout/";
        $templates = __DIR__ . "/../../app/view/templates/";

        #require_once "app/view/header.php";

        ob_start();
        require_once $templates . $template . ".php";
        $template = ob_get_clean();

        require_once $layouts . $layout . ".php";

        #require_once "../app/view/pages/footer.php";
    }
}