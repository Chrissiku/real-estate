<?php
namespace App;
use AltoRouter;

class Router
{

    private $view_path;

    private AltoRouter $router;

    public function __construct(string $view_path)
    {
        $this->view_path = $view_path;
        $this->router = new AltoRouter();
    }

    public function get (string $url, string $view, ?string $name = null): self
    {
        $this->router->map('GET', $url, $view, $name);
        return $this;
    }

    public function url(string $routeName, array $params = [])
    {
        return $this->router->generate($routeName, $params);
    }

    public function run ()
    {
        $match = $this->router->match();
        if($match) {
            $_view = $match['target'];
            $params = $match['params'];
            $router = $this;
            ob_start();
            require $this->view_path . DIRECTORY_SEPARATOR . $_view . '.php';
            $content = ob_get_clean();
            require $this->view_path . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'layout.php';
        }else {
            echo '404 Page Not Found';
            exit;
        }
        return $this;
    }
}
