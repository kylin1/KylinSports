<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 10/10/2016
 * Time: 10:42
 */
namespace  App\Http\Controllers;

use App\Member;

class MemberController extends Controller {

    public function info($id){
        // call model
        return Member::getMember();

//        return view('member/info',[
//            'name' => 'kylin',
//            'age' => 18
//        ]);
    }

    public function info2(){
        return route('info');
    }
}