<?php

namespace NehalPatel\FirstPackage\Providers;

use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{
    protected $namespace = 'NehalPatel\FirstPackage\Http\Controllers';

    public function map()
    {
        Route::namespace($this->namespace)
            ->group(__DIR__ . '/../../routes/web.php');
    }
}