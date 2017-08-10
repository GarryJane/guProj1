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
        if(!isset($_GET['page'])) {
            self::render();
        } else {
            switch ($_GET['page']) {
                case 'single':
                    self::render('singlePage.tmpl',
                        [
                            "title" => "Single Page",
                            "activeWomen" => "header-menu__item_active"
                        ]);
                    break;
                default:
                    self::render();
            }
        }
    }

    protected function byPOST()
    {
    }

    public function render($templateName = 'main.tmpl', $varsArr = ['title' => 'Main Page', "activeHome" => "header-menu__item_active"], $path = 'templates')
    {
        require_once 'vendor/autoload.php';
        $loader = new Twig_Loader_Filesystem($path);
        $twig = new Twig_Environment($loader, array('cache' => 'tmp/compilation_cache'));

        $template = $twig->load('header.tmpl');
        echo $template->render($varsArr);

        $template = $twig->load($templateName);
        echo $template->render($varsArr);

        $template = $twig->load('footer.tmpl');
        echo $template->render($varsArr);
    }
}
