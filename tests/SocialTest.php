<?php

use App\Http\Controllers\Social\FriendController;
use App\Http\Controllers\Social\GroupController;
use App\Http\Controllers\Social\PostController;

class SocialTest extends TestCase
{

    public function test()
    {
//        $this->friendlist();
//        $this->group();
        $this->friendPost();
    }

    public function friendPost()
    {
        $controller = new FriendController();
        $posts = $controller->friendPost(1);
        foreach ($posts as $post) {
            print $post->userid . $post->content ."\n";
        }
    }

    public function group()
    {
        $controller = new GroupController();
        $controller->deleteGroup(20, 20);
    }

    private function friendlist()
    {
        $controller = new FriendController();
        $array = $controller->friendList(1);
        print sizeof($array);
        foreach ($array as $oneFriend) {
            print $oneFriend->id . "\n";
        }
    }

    private function show()
    {
        $controller = new FriendController();
        print $controller->show(4);
    }
}
