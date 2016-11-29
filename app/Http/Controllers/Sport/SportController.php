<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers\Sport;

use App\DayData;
use App\HourData;
use App\Http\Controllers\Controller;
use App\Util;
use Illuminate\Support\Facades\DB;

class SportController extends Controller
{

    public function index()
    {
        $date = Util::getToday();
        $today = new Util;

        return view('sports.today', [
            'today' => $today
        ]);
    }

    //今日界面：
    /**
     * 今天的数据（时间、步数、距离、能量）是否达到目标
     * @param $id
     * @internal param $date
     */
    public function todayInfo($id)
    {
        $step = 0;
        $distance = 0;
        $energy = 0;

        $date = Util::getToday();
        $endHour = 18;

        $data = HourData::where('userid', $id)
            ->where('date', $date)
            ->where('hour', '<=', $endHour)
            ->get();

        foreach ($data as $oneHour){
            $distance = $distance + $oneHour->meters;
            $energy = $energy + $oneHour->calories;
            $step = $step + $oneHour->steps;
        }

    }

    public function getTodayStep($userid)
    {
        //今天到此刻的数据累加
        $date = Util::getToday();
        $endHour = 18;

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

    /**
     * 今天的好友步数排名（好友名、步数、排名）
     * @param $id
     */
    public function friendRank($id)
    {
        $friendList =
            ['Dakota Rice' => [12321, 1],
                'Tim Hooper' => [6253, 2],
                'Steven' => [5023, 3]];
    }

    //1.运动统计
    /**
     * 步数柱状图（每一天、每一天总步数）+ 分析结果
     * @param $id
     * @return string
     */
    public function stepBar($id)
    {
        $labels = array();
        $series = array();

        $stepInfo = DB::select('select `date`,`steps` from daily_data 
where userid == ' . $id . ' order by `date` ');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->steps;
            $labels[] = $oneInfo->date;
            $series[] = $stepOne;
        }

        $arr = ['labels' => $labels, 'series' => $series];
        $dataStepsBar = json_encode($arr);
        return $dataStepsBar;
    }

    /**
     * 心率折线图（每一天、每一天平均心率）+ 分析结果
     * @param $id
     * @return string
     */
    public function hearLine($id)
    {
        $labels = array();
        $series = array();

        $stepInfo = DB::select('select `date`,`heartrate` from daily_data 
where userid == ' . $id . ' order by `date` ');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->heartrate;
            $labels[] = $oneInfo->date;
            $series[] = $stepOne;
        }

        $arr = ['labels' => $labels, 'series' => $series];
        $heartLineChart = json_encode($arr);
        return $heartLineChart;
    }

    /**
     * 跑步历史柱状图（每一天、每一天公里）+ 分析结果
     * @param $id
     * @return string
     */
    public function runHistory($id)
    {
        $labels = array();
        $series = array();

        $stepInfo = DB::select('select `date`,`meters` from daily_data 
where userid == ' . $id . ' order by `date` ');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->meters;
            $labels[] = $oneInfo->date;
            $series[] = $stepOne;
        }

        $arr = ['labels' => $labels, 'series' => $series];
        $heartLineChart = json_encode($arr);
        return $heartLineChart;
    }


}