<?php

use App\Facades\TestClass;
use Foobar\Facades\Foo;

class ServiceTest extends TestCase
{

    public function test()
    {

        print TestClass::doSomething();
//        print Foo::Bar();
    }

}