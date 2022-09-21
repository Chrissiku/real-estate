<?php
namespace App;
require_once '../vendor/autoload.php';
use AltoRouter;

class Router
{

    private $view_path;

    private AltoRouter $router;

    public function __construct(string $view_path)
    {
        $this->view_path = $view_path;
    }

    public function get (string $url, string $view, string $name): self
    {
        $this->router = new AltoRouter();

        $this->router->map('GET', $url, $view, $name);
        return $this;
    }

    public function run ()
    {
        $match = $this->router->match();
        if($match) {
            $view = $match['target'];
            $params = $match['params'];
            ob_start();
            require_once $this->view_path . '/components' . $view . '.php';
            $content = ob_get_clean();
            require_once $this->view_path . '/layouts/layout.php';
        }else {
            echo '404 Page Not Found';
            exit;
        }
        return $this;
    }
}
