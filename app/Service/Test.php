<?php

namespace App\Facades;

use App\FriendShip;
use App\User;

class Test
{
    public function doSomething()
    {
        return 'This is TestClass method doSomething';
    }

    /**
     * 返回指定⽤户的好友列表
     *
     * @param $userID
     * @return array
     */
    public function friendList($userID){
        //获取好友列表
        $friendList = FriendShip::where('user1id',$userID)->get();
        $resultList = array();
        foreach ($friendList as $friend){
            //得到好友的ID
            $friendId = $friend->user2id;

            //获取好友的信息
            $friend = User::where('id',$friendId)->first();
            $resultList[] = $friend;
        }
        return $resultList;
    }
}