<?php


use App\Http\Controllers\SportController;

class SportTest extends TestCase
{

    public function test()
    {
        $controller = new SportController;
//        print $controller->stepBar(1);
//        print $controller->hearLine(1);
//        print $controller->todayInfo(1);
//        print $controller->getTodayStep(1);
        print $controller->stepBar(1);
    }

}
