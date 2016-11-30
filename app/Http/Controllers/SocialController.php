<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers;

class SocialController extends Controller{


    public function index(){
        return view('social.friend');
    }

    public function group(){
        return view('social.group');
    }

    public function writePost(){
        return view('social.new-post');
    }

}
