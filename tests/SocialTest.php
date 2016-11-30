<?php

use App\Facades\TestClass;
use App\Http\Controllers\Social\FriendController;
use App\Http\Controllers\Social\GroupController;

class SocialTest extends TestCase
{

    public function test()
    {
        $array = TestClass::friendList(1);
        print sizeof($array)."\n";
        foreach ($array as $oneFriend) {
            print $oneFriend->id . "\n";
        }
//        $this->group();
//        $this->friendPost();
    }

    private function friendPost()
    {
        $controller = new FriendController();
        $posts = $controller->friendPost(1);
        foreach ($posts as $post) {
            print $post->userid . $post->content ."\n";
        }
    }

    private function group()
    {
        $controller = new GroupController();
        $controller->deleteGroup(20, 20);
    }

    private function show()
    {
        $controller = new FriendController();
        print $controller->show(4);
    }
}
