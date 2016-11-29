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

class HealthController extends Controller{

    //3.健康数据
    /**
     * 体重折线图（每一月、每一月体重）+ 分析结果
     * @param $id
     */
    public function weightLine($id){
        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series = [
            [0, 3, 3, 5, 0, 7, 4, 0, 8.5, 0, 6, 3]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataWeightChart = json_encode($arr);
    }

    /**
     * 体脂含量折线图（每一月、每一月体脂量）+ 分析结果
     * @param $id
     */
    public function fatRateLine($id){

        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series = [
            [70, 80, 80, 90, 95, 70, 80, 160, 70, 80, 90, 180]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataFatChart = json_encode($arr);
    }

}

