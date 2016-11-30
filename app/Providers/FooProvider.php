<?php

namespace App\Providers;

use Foobar\Foo;
use Illuminate\Support\ServiceProvider;

class FooProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('foo', function () {
            return new Foo; //Add the proper namespace at the top
        });
    }
}
