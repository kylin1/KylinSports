<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Social;

use App\Facades\TestClass;
use App\FriendShip;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;

class FriendController extends Controller{



    /**
     * 返回指定⽤户的好友的动态
     *
     * @param $id
     * @return array
     */
    public function friendPost($id){
        $resultList = array();

        $friendList = TestClass::friendList($id);
        // 这个用户的所有好友
        foreach ($friendList as $friend){
            $friendId = $friend->id;
            //好友的所有动态信息
            $postList = Post::where('userid',$friendId)->get();
            foreach ($postList as $post){
                $resultList[] = $post;
            }
        }

        return $resultList;
    }

    /**
     * 显示好友详细信息
     *
     * @param $userID
     */
    public function show($userID){
        $friend = User::where('id',$userID);
        if($friend->first()){
            return $friend->first();
        }
    }

    /**
     * 添加两⼈的好友关系
     *
     * @param $userID
     * @param $friendID
     */
    public function addFriend($userID,$friendID){
        $friendShip = FriendShip::create(
            ['user1id'=>$userID,'user2id'=>$friendID]
        );
        print $friendShip;
    }

    /**
     * 删除两⼈的好友关系
     *
     * @param $userID
     * @param $friendID
     * @return mixed
     */
    public function deleteFriend($userID,$friendID){
        $target = FriendShip::where(
            ['user1id'=>$userID,'user2id'=>$friendID]
        );
        $bool = $target->delete();
        return $bool;
    }

    /**
     * 返回符合关键字的⽤户信息
     *
     * @param $keyword
     */
    public function search($keyword){

    }

}