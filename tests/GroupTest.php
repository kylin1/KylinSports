<?php


use App\Group;
use App\GroupMember;
use App\Http\Controllers\CompeteController;
use App\Http\Controllers\SocialController;

class GroupTest extends TestCase
{

    public function test()
    {
        $con = new SocialController;
        $list = $con->groupList(1);
        foreach ($list as $item) {
            print $item->name . "\n";
        }


    }
}