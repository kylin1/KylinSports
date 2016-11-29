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
use App\Today;

class SportController extends Controller
{

    public function index()
    {
        $date = Today::getToday();
        $today = new Today;

        return view('sports.today', [
            'today' => $today
        ]);
    }

    //今日界面：
    /**
     * 今天的数据（时间、步数、距离、能量）是否达到目标
     * @param $date
     * @param $id
     */
    public function todayInfo($date, $id)
    {
        $step = 0;
        $distance = 0;
        $energy = 0;

        $endHour = 18;
        for ($hour = 1; $hour <= $endHour; $hour++) {
            $data = HourData::where(['userid' => $id,
                'date' => $date,
                'hour' => $hour])->first();

            $distance = $distance + $data->meters;
            $energy = $energy + $data->calories;
            $step = $step + $data->steps;
        }

        echo $distance,' ',$step,' ',$energy;
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
     */
    public function stepBar($id)
    {
        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series =
            [[0, 0, 3200, 7800, 5503, 4053, 3206, 4034, 5068, 6100, 7506, 8905]];
        $arr = ['labels' => $labels, 'series' => $series];

        $dataStepsBar = json_encode($arr);
    }

    /**
     * 心率折线图（每一天、每一天平均心率）+ 分析结果
     * @param $id
     */
    public function hearLine($id)
    {
        $labels = ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'];
        $series = [
            [150, 151, 152, 151, 153,
                154, 155, 156, 160, 158, 156, 156]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataHeartChart = json_encode($arr);
    }

    /**
     * 跑步历史柱状图（每一天、每一天公里）+ 分析结果
     * @param $id
     */
    public function runHistory($id)
    {
        $labels = ['周1', '周2', '周3', '周4', '周5', '周6', '周7'];
        $series = [
            [6, 7, 6, 5, 6, 8, 29]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataRunLineChart = json_encode($arr);
    }


}