<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Social;

use App\Group;
use App\GroupMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupController extends Controller{

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
            $oneGroup = $this->show($groupId);
            $resultList[] = $oneGroup;
        }
        return $resultList;
    }

    /**
     * new group
     *
     * @param Request $request
     * @return para
     */
    public function create(Request $request){
        //如果是提交
        if($request->isMethod('POST')){
            $validator = Validator::make($request->input(),
                [
                    ''
                ],[
                    'required' => '必填选项',
                    'integer' => '必须是整数',
                ],[

                ]);

            //验证失败
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            //验证通过
            $data = $request->input('Group');

            if(Group::create($data)){
                return redirect('')->with('success','add success!');
            }else{
                return redirect()->back()->with('error','add failed!');
            }
        }
        //否则返回空的实体
        $group = new Group();
        return view('',[
            'group'=>$group
        ]);
    }

    /**
     * 指定群组的详细信息
     *
     * @param $groupId
     */
    public function show($groupId){
        $group = Group::find($groupId);
        if($group->first()){
            return $group->first();
        }
    }

    /**
     * 将⽤户添加到指定群组中
     *
     * @param $userID
     * @param $groupID
     */
    public function addGroup($userID,$groupID){
        $memberShip = GroupMember::create(
            ['userid'=>$userID,'groupid'=>$groupID]
        );
        print $memberShip;
    }

    /**
     * 将⽤户退出指定群组
     *
     * @param $userID
     * @param $groupID
     */
    public function deleteGroup($userID,$groupID){
        $target = GroupMember::where(
            ['userid'=>$userID,'groupid'=>$groupID]
        );
        $bool = $target->delete();
        return $bool;
    }

    public function search($keyword){

    }
}