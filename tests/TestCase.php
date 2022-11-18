<?php

namespace GeorgyKurian\FindUnusedRoutesAndControllers\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use GeorgyKurian\FindUnusedRoutesAndControllers\FindUnusedRoutesAndControllersServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'GeorgyKurian\\FindUnusedRoutesAndControllers\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FindUnusedRoutesAndControllersServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_find-unused-routes-and-controllers_table.php.stub';
        $migration->up();
        */
    }
}
