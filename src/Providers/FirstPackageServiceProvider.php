<?php

namespace NehalPatel\FirstPackage\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use NehalPatel\FirstPackage\Hello;
use NehalPatel\FirstPackage\View\AppLayout;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('first-package', function (){
            return new Hello;
        });

        $this->mergeConfigFrom($this->base_path('config/first-package.php'), 'first-package');
    }

    public function boot()
    {

        $this->loadAssets();

        $this->publishAssets();
    }

    protected function base_path($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }

    protected function loadAssets()
    {
//        $this->loadRoutesFrom($this->base_path('routes/web.php'));

        $this->loadMigrationsFrom(
            $this->base_path('database/migrations')
        );

        Blade::component('first-package::app-layout', AppLayout::class);
        $this->loadViewsFrom($this->base_path('resources/views'), 'first-package');

        $this->loadTranslationsFrom(
            $this->base_path('resources/lang'),
            'first-package'
        );

        $this->loadJsonTranslationsFrom($this->base_path('resources/lang/json'));
    }

    protected function publishAssets()
    {
        $this->publishes([
            $this->base_path('database/migrations') => database_path('migrations')
        ], 'first-package-migrations');

        $this->publishes([
            $this->base_path('resources/views') => resource_path('views/vendor/first-package'),
            $this->base_path('src/View/AppLayout.php') => base_path('app/View/AppLayout.php')
        ], 'first-package-views');

        $this->publishes([
            $this->base_path('config/first-package.php') => base_path('config/first-package.php')
        ], 'first-package-config');

        $this->publishes([
            $this->base_path('resources/lang') => resource_path('lang/vendor/first-package')
        ], 'first-package-lang');
    }

}