<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers;

use App\CompeteMember;
use App\Competition;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyUserController extends Controller
{

    public function index()
    {
        $userid = Auth::user()->id;
        $thisUser = User::where('id',$userid)->first();

        return view('user.user',[
            'thisUser'=>$thisUser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * /admin/pages/create
     * get
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * admin/pages/7/edit
     * get
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $userid = Auth::user()->id;
        $thisUser = User::where('id',$userid)->first();

        return view('user.user', [
            'thisUser' => $thisUser,
        ]);
    }

    /**
     * /admin/pages/1
     * get
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * /admin/pages
     * post
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $userid = Auth::user()->id;
        $target = User::find($userid);

        $target->name = $request->get('name');
        $target->nickname = $request->get('nickname');
        $target->sex = $request->get('sex');
        $target->birthday = $request->get('birthday');
        $target->introduction = $request->get('introduction');

        if ($target->save()) {
            return redirect('user');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * admin/pages/7
     * put
     *
     * @param Request $request
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * /admin/pages/7
     * delete
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
    }


}