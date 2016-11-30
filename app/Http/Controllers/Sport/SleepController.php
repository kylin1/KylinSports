<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Sport;

use App\DayData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SleepController extends Controller{

    //2.睡眠统计：
    /**
     * 睡眠柱状图（每一天、每一天睡眠总时间）
     * @param $id
     * @return string
     */
    public function sleepBar($id){

        $labels = array();
        $series = array();

        $sleepInfo = DB::select('select `date`,`total_minutes` from daily_data 
where userid == ' . $id . ' order by `date` desc limit 10');

        foreach ($sleepInfo as $oneInfo) {
            $labels[] = $oneInfo->date;
            $series[] = (int)($oneInfo->total_minutes/60.0);
        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
        $runHistory = json_encode($arr);
        return $runHistory;
    }

    /**
     * 详细睡眠table：（日期、入睡时间、起床时间、时长）+ 本周平均时间
     * @param $id
     * @return array
     */
    public function sleepDetail($id){
        $sleepInfo = DB::select('select `date`,`total_minutes`,`sleepAt`,`wakeAt` from daily_data 
where userid == ' . $id . ' order by `date` desc limit 7');


        $sleepDetail = array();

        foreach ($sleepInfo as $oneInfo){

            $date = $oneInfo->date;
            $sleepAt = $oneInfo->sleepAt;
            $wakeAt = $oneInfo->wakeAt;

            $hour = (int)($oneInfo->total_minutes/60.0);

            $oneDay = [$date,$sleepAt,$wakeAt,$hour];

            $sleepDetail[] = $oneDay;
        }
        return $sleepDetail;
    }
}