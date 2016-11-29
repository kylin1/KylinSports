<?php

namespace App\Http\Controllers;

use App\HourData;
use App\Http\Controllers\Social\FriendController;
use App\Util;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取登录的用户信息
        $thisUser = Auth::user();
        $userid = $thisUser->id;

        //获取今日的数据信息
        $todayInfo = $this->todayInfo($userid);
        $step = $todayInfo[0];
        $distance = $todayInfo[1];
        $energy = $todayInfo[2];
        $timeMinute = $todayInfo[3];

        //计算运动的小时和分钟
        $hour = (int)($timeMinute / 60);
        $minute = $timeMinute % 60;

        //获取好友步数的排名
        $friendList = $this->friendRank($userid);

        return view('sports.today', [
            'step' => $step,
            'distance' => $distance,
            'energy' => $energy,
            'timeHour' => $hour,
            'timeMinute' => $minute,
            'friendList' => $friendList,
        ]);

    }

    /**
     * 今天的数据（时间、步数、距离、能量）是否达到目标
     * @param $id
     * @return array
     */
    private function todayInfo($id)
    {
        $result = array();
        //获取今日的运动数据
        $step = 0;
        $distance = 0;
        $energy = 0;
        $minute = 0;

        $date = Util::getToday();
        $endHour = 18;

        //读取数据库数据
        $hourDataList = HourData::where('userid', $id)
            ->where('date', $date)
            ->where('hour', '<=', $endHour)
            ->get();

        //对于每一个小时的数据
        foreach ($hourDataList as $oneHour) {
            $distance = $distance + $oneHour->meters;
            $energy = $energy + $oneHour->calories;
            $step = $step + $oneHour->steps;
            $minute = $minute + $oneHour->minutes;
        }

        //返回结果
        $result[] = $step;
        $result[] = $distance;
        $result[] = $energy;
        $result[] = $minute;
        return $result;
    }

    /**
     * 今天的好友步数排名（好友名、步数、排名）
     * @param $userId
     * @return array
     */
    public function friendRank($userId)
    {
        //获取所有好友
        $FriendController = new FriendController;
        $friendList = $FriendController->friendList($userId);

        //获取好友的步数信息
        $friendAndStep = array();
        foreach ($friendList as $oneFriend) {
            $friendId = $oneFriend->id;
            $friendName = $oneFriend->name;
            $step = $this->getTodayStep($friendId);
            //名称与步数键值对的数组
            $friendAndStep[$friendName] = $step;
        }

        //根据值(步数)排序
        arsort($friendAndStep);

        $result = array();
        $index = 1;
        foreach ($friendAndStep as $oneFriend=>$step) {
            $result[$oneFriend] = [$step,$index++];
        }

        return $result;
    }

    /**
     * 获取一个用户当天到此刻的步数信息
     *
     * @param $userid
     * @return int
     */
    private function getTodayStep($userid)
    {
        //模拟今天的日期和当前时刻
        $date = Util::getToday();
        $endHour = 18;

        //0-当前时刻的步数累加
        $step = 0;
        for ($hour = 1; $hour <= $endHour; $hour++) {
            $data = HourData::where(['userid' => $userid,
                'date' => $date,
                'hour' => $hour]);
            //如果用户有数据则累加,否则为0
            if ($data->first()) {
                $step = $step + $data->first()->steps;
            }
        }
        return $step;
    }

}
