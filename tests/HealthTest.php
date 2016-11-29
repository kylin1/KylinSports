<?php

use App\Http\Controllers\Sport\HealthController;
use App\Http\Controllers\Sport\SportController;

class HealthTest extends TestCase
{

    public function test()
    {
        $controller = new HealthController();
        print $controller->weightLine(0);
        print $controller->fatRateLine(1);
    }

}
