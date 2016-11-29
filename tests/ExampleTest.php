<?php

use App\Http\Controllers\HomeController;

class ExampleTest extends TestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $controller = new HomeController();
        $controller->todayInfo(1);
    }



}
