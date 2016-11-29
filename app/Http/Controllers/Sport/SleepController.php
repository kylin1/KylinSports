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

class SleepController extends Controller{

    //2.睡眠统计：
    /**
     * 睡眠柱状图（每一天、每一天睡眠总时间）
     * @param $id
     */
    public function sleepBar($id){

        $labels = ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'];
        $series = [
            [18, 18, 18, 19, 19,
                19, 19, 20, 22, 20, 19, 18]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataSleepBar = json_encode($arr);
    }

    /**
     * 详细睡眠table：（日期、入睡时间、起床时间、时长）+ 本周平均时间
     * @param $id
     */
    public function sleepDetail($id){

    }
}