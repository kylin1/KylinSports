<?php
// %LARAVEL_ROO%/Foobar/FooFacade.php

namespace Foobar\Facades;


use Illuminate\Support\Facades\Facade;

class Foo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'foo'; // Keep this in mind
    }
}