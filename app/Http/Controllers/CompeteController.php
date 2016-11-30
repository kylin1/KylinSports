<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers;

use App\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompeteController extends Controller
{

    public function index()
    {
        $competeList = Competition::all();

        return view('compete.index', [
            'competeList' => $competeList,
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
        return view('compete.create');
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
        $compete = Competition::find($id);

        return view('compete.edit', [
            'compete' => $compete,
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
        $compete = Competition::find($id);

        return view('compete.detail', [
            'compete' => $compete,
        ]);
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
        $this->validate($request, [
            'target' => 'required',
        ]);

        $compete = new Competition;
        $compete->name = $request->get('name');
        $compete->target = $request->get('target');
        $compete->number = $request->get('number');
        $compete->type = $request->get('type');
        $compete->bonus = $request->get('bonus');
        $compete->rule = $request->get('rule');
        $compete->rulemore = $request->get('rulemore');
        $compete->startAt = $request->get('startAt');
        $compete->endAt = $request->get('endAt');
        $compete->startid = Auth::user();

        if ($compete->save()) {
            return redirect('competition');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
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
        $this->validate($request, [
            'target' => 'required',
        ]);

        $compete = Competition::find($id);
        $compete->name = $request->get('name');
        $compete->target = $request->get('target');
        $compete->number = $request->get('number');
        $compete->type = $request->get('type');
        $compete->bonus = $request->get('bonus');
        $compete->rule = $request->get('rule');
        $compete->rulemore = $request->get('rulemore');
        $compete->startAt = $request->get('startAt');
        $compete->endAt = $request->get('endAt');

        if ($compete->save()) {
            return redirect('competition');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
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
        Competition::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }


    /**
     * 个人竞赛界面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myCompete()
    {
        $userID = Auth::user();

        $myOwnCmpt = $this->myOwnCmpt($userID);
        $myInCmpt = $this->myInCmpt($userID);
        $cmptHistory = $this->cmptHistory($userID);

        //返回我的竞赛信息
        return view('compete.mine', [
            'myOwnCmpt' => $myOwnCmpt,
            'myInCmpt' => $myInCmpt,
            'cmptHistory' => $cmptHistory,
        ]);
    }

    /**
     * 我发起的
     *
     * @param $userID
     */
    private function myOwnCmpt($userID)
    {

    }

    /**
     * 我参与的
     *
     * @param $userID
     */
    private function myInCmpt($userID)
    {

    }


    /**
     * 用户从竞赛中退出
     *
     * @param $CmptID
     * @param $userID
     */
    public function withdraw($CmptID, $userID)
    {

    }

    /**
     * 历史竞赛
     *
     * @param $userID
     */
    private function cmptHistory($userID)
    {

    }

}