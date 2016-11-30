<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers;

use App\Facades\UserInfoClass;
use App\Group;
use App\GroupMember;
use App\Post;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{


    /**
     * 圈子界面的首页:好友动态+好友列表
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $userid = Auth::user()->id;
        //获取用户的好友动态与信息列表
        $friendList = UserInfoClass::friendList($userid);
        $friendPost = $this->friendPost($friendList);

        return view('social.friend', [
            'friendPost' => $friendPost,
            'friendList' => $friendList,
        ]);
    }

    /**
     * 群组界面的首页
     * 显示我的群组
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function group()
    {
        $userid = Auth::user()->id;
        $myGroup = $this->groupList($userid);

        return view('social.group', [
            'myGroup' => $myGroup,
        ]);
    }

    /**
     * 返回发表帖子的表单
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function writePost()
    {
        return view('social.new-post');
    }


    /**
     * 返回指定⽤户的好友的动态
     *
     * @param $friendList
     * @return array
     */
    private function friendPost($friendList){
        $resultList = array();

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
     * 返回指定⽤户参与的群组列表
     *
     * @param $userID
     * @return array
     */
    public function groupList($userID){

        $groupList = GroupMember::where('userid',$userID)->get();
        $resultList = array();
        foreach ($groupList as $group){
            $groupId = $group->groupid;

            $oneGroup = Group::where('id',$groupId);
            if($oneGroup->first()){
                $resultList[] = $oneGroup->first();
            }
        }
        return $resultList;
    }
}
