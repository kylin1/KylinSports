<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Sport;

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
            $sleepOne = $oneInfo->total_minutes;
            $labels[] = $oneInfo->date;
            $series[] = (int)$sleepOne;
        }

        $arr = ['labels' => $labels, 'series' => [$series]];
        $runHistory = json_encode($arr);
        return $runHistory;
    }

    /**
     * 详细睡眠table：（日期、入睡时间、起床时间、时长）+ 本周平均时间
     * @param $id
     */
    public function sleepDetail($id){

    }
}