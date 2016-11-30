<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers;

class SocialController extends Controller
{


    public function index()
    {

        $friendPost = 1;
        $friendList = 2;

        return view('social.friend', [
            'friendPost' => $friendPost,
            'friendList' => $friendList,
        ]);
    }

    public function group()
    {
        $groupList = 1;
        $myGroup = 1;

        return view('social.group', [
            'groupList' => $groupList,
            'myGroup' => $myGroup,
        ]);
    }

    public function writePost()
    {
        return view('social.new-post');
    }

}
