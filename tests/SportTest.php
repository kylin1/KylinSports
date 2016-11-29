<?php

use App\Http\Controllers\Sport\SportController;

class HealthTest extends TestCase
{

    public function test()
    {
        $controller = new SportController();
        print $controller->stepBar(1);
        print $controller->hearLine(1);
        print $controller->runHistory(1);
    }

}
