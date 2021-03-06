<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Sport\HealthController;
use App\Http\Controllers\Sport\SleepController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SportController extends Controller
{

    public function landing()
    {
        return view('login.index');
    }


    public function index(){
        //获取登录的用户信息
        $thisUser = Auth::user();
        $userid = $thisUser->id;

        $dataStepsBar = $this->stepBar($userid);
        $dataRunLineChart = $this->runHistory($userid);
        $dataHeartChart = $this->hearLine($userid);

        $weightController = new HealthController;
        $dataWeightChart = $weightController->weightLine($userid);
        $dataFatChart = $weightController->fatRateLine($userid);

        $sleepController = new SleepController;
        $dataSleepBar = $sleepController->sleepBar($userid);
        $sleepDetail = $sleepController->sleepDetail($userid);

        return view('sports.sport',[
            'dataStepsBar' => $dataStepsBar,
            'dataHeartChart' => $dataHeartChart,
            'dataRunLineChart' => $dataRunLineChart,

            'dataSleepBar' => $dataSleepBar,

            'dataWeightChart' => $dataWeightChart,
            'dataFatChart' => $dataFatChart,
            'sleepDetail' => $sleepDetail,
        ]);
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
where userid == ' . $id . ' order by `date` desc limit 10');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->steps;
            $labels[] = $oneInfo->date;
            $series[] = (int)$stepOne;
        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
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
where userid == ' . $id . ' order by `date` desc limit 10');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->heartrate;
            $labels[] = $oneInfo->date;
            $series[] = (int)$stepOne;
        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
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
where userid == ' . $id . ' order by `date` desc limit 10');

        foreach ($stepInfo as $oneInfo) {
            $stepOne = $oneInfo->meters / 1000;
            $labels[] = $oneInfo->date;
            $series[] = (int)$stepOne;
        }
        $labels = array_reverse($labels);
        $series = array_reverse($series);

        $arr = ['labels' => $labels, 'series' => [$series]];
        $runHistory = json_encode($arr);
        return $runHistory;
    }


}