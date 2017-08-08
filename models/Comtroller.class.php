<?php

include('Logger.class.php');

class Controller
{
    protected $content = [];
    protected $template = "";

    public function __construct()
    {
        if(isset($_POST)) {
            self::byPOST();
        }

        if(isset($_GET)) {
             self::byGET();
        } else {
            self::render();
        }
    }

    protected function byGET()
    {
        // Rendering by $GET['action'] value
        switch ($_GET['page']) {
            case 'main':
                self::render();
                break;
            default:
                self::render();
        }
    }

    protected function byPOST()
    {
    }

    public function render($templateName = 'main.tmpl', $varsArr = ['title' => 'MAIN PAGE'], $path = 'templates')
    {
        require_once 'vendor/autoload.php';
        $loader = new Twig_Loader_Filesystem($path);
        $twig = new Twig_Environment($loader, array('cache' => 'tmp/compilation_cache'));
        $template = $twig->load($templateName);
        echo $template->render($varsArr);
    }

}
