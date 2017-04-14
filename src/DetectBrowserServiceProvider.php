<?php namespace Vis\DetectBrowser;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class DetectBrowserServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/errors'),
        ], 'detect-browser-view');

        $this->publishes([
            __DIR__ . '/published' => public_path('packages/vis/detect-browser'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/config' => config_path('detect-browser/')
        ], 'detect-browser-config');

    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router)
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }

    public function provides()
    {
    }
}



