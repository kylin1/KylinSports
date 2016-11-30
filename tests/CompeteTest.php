<?php


use App\Http\Controllers\CompeteController;

class CompeteTest extends TestCase
{

    public function test()
    {
        $this->myComptStart();
    }

    /**
     *
     */
    public function myComptStart()
    {
        $controller = new CompeteController();
        $list = $controller->myOwnCmpt(1);
        foreach ($list as $one){
            print $one->id."\n";
        }

    }

    /**
     *
     */
    public function myCompt()
    {
        $controller = new CompeteController();
        $list = $controller->myInCmpt(1);
        foreach ($list as $one){
            print $one->id."\n";
        }

    }
}
