<?php

namespace Agostech\CrudMvcPoc\Controller;

use Jenssegers\Blade\Blade;

class BaseController
{
    protected $blade;

    public function __construct()
    {
        $views = __DIR__ . '/../../views';
        $cache = __DIR__ . '/../../cache';
        $this->blade = new Blade($views, $cache);

        // Share global variables from env
        $this->blade->share('appName', $_ENV['APP_NAME'] ?: 'Default App Name');
        $this->blade->share('appEnv', $_ENV['APP_ENV'] ?: 'production');
    }

    public function render(string $view, array $data = []): void
    {
        echo $this->blade->render($view, $data);
    }
}
