<?php

use App\Http\Controllers\HomeController;

class HomeTest extends TestCase
{

    public function test()
    {
        $this->testfriendList();
    }

    public function testfriendList()
    {
        $controller = new HomeController();
        $friendAndStep = $controller->friendRank(1);
        foreach ($friendAndStep as $friend=>$point){
            print $friend.' '.$point[0].' '.$point[1]."\n";
        }
    }
}
