<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Sport;

use App\Http\Controllers\Controller;
use App\Weight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{

    //3.健康数据
    /**
     * 体重折线图（每一月、每一月体重）+ 分析结果
     * @param $id
     *
     * @return json-line
     */
    public function weightLine($id)
    {
        $labels = array();
        $series = array();

        $weightInfo = DB::select('select `date`,`weight` from weight 
where userid == ' . $id . ' order by `date` desc limit 10');
        foreach ($weightInfo as $oneInfo) {
            $date = date('Y-m-d', $oneInfo->date);
            $weight = $oneInfo->weight;
            $labels[] = $date;
            $series[] = (int)$weight;

        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
        $dataWeightChart = json_encode($arr);

        return ($dataWeightChart);
    }

    /**
     * 体脂含量折线图（每一月、每一月体脂量）+ 分析结果
     * @param $id
     *
     * @return json-rate-line
     */
    public function fatRateLine($id)
    {

        $labels = array();
        $series = array();

        $weightInfo = DB::select('select `date`,`fatrate` from weight 
where userid == ' . $id . ' order by `date` desc limit 10');
        foreach ($weightInfo as $oneInfo) {
            $date = date('Y-m-d', $oneInfo->date);
            $weight = $oneInfo->fatrate;
            $labels[] = $date;
            $series[] = (int)$weight;
        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
        $dataWeightChart = json_encode($arr);

        return ($dataWeightChart);
    }

}

