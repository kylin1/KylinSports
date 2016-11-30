<?php

use App\Facades\UserInfoClass;

class ServiceTest extends TestCase
{

    public function test()
    {
        $this->ranktest();
    }

    private function ranktest(){
        print UserInfoClass::userLevel(1);
        print UserInfoClass::userLevel(2);
        print UserInfoClass::userLevel(3);
    }

}