<?php

namespace NehalPatel\FirstPackage\Tests;

use NehalPatel\FirstPackage\Facades\FirstPackage;
use NehalPatel\FirstPackage\Providers\FirstPackageServiceProvider;
use NehalPatel\FirstPackage\Providers\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getApplicationAliases($app)
    {
        return [
            'FirstPackage' => FirstPackage::class
        ];
    }

}