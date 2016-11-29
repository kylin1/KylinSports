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