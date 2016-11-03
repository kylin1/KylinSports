<?php

/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 28/10/2016
 * Time: 21:01
 */

namespace App\Http\Controllers\Sport;

use App\Http\Controllers\Controller;
use App\Today;

class PageController extends Controller
{

    public function sport()
    {
        //
        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series =
            [[0, 0, 3200, 7800, 5503, 4053, 3206, 4034, 5068, 6100, 7506, 8905]];
        $arr = ['labels' => $labels, 'series' => $series];

        $dataStepsBar = json_encode($arr);

        $labels = ['周1', '周2', '周3', '周4', '周5', '周6', '周7'];
        $series = [
            [6, 7, 6, 5, 6, 8, 29]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataRunLineChart = json_encode($arr);


        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series = [
            [0, 3, 3, 5, 0, 7, 4, 0, 8.5, 0, 6, 3]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataWeightChart = json_encode($arr);


        $labels = ['10-01', '10-02', '10-03', '10-04', '10-05',
            '10-06', '10-07', '10-08', '10-09', '10-10', '10-11', '10-12'];
        $series = [
            [70, 80, 80, 90, 95, 70, 80, 160, 70, 80, 90, 180]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataFatChart = json_encode($arr);


        $labels = ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'];
        $series = [
            [150, 151, 152, 151, 153,
                154, 155, 156, 160, 158, 156, 156]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataHeartChart = json_encode($arr);


        $labels = ['3月', '4月', '5月', '6月', '7月',
            '8月', '9月', '10月', '11月', '12月'];
        $series = [
            [18, 18, 18, 19, 19,
                19, 19, 20, 22, 20, 19, 18]
        ];
        $arr = ['labels' => $labels, 'series' => $series];
        $dataSleepBar = json_encode($arr);

        return view('sports.sport', [
            'dataStepsBar' => $dataStepsBar,
            'dataRunLineChart' => $dataRunLineChart,
            'dataWeightChart' => $dataWeightChart,
            'dataFatChart' => $dataFatChart,
            'dataHeartChart' => $dataHeartChart,
            'dataSleepBar' => $dataSleepBar,
        ]);
    }

    public function compete()
    {
        return view('sports.compete');
    }

    public function social()
    {
        return view('sports.social');
    }

    public function today()
    {
        $today = new Today;

        $today->time = [1, 18];
        $today->step = 3000;
        $today->distance = 2.0;
        $today->energy = 609;

        $today->friendList =
            ['Dakota Rice' => [12321, 1],
                'Tim Hooper' => [6253, 2],
                'Steven' => [5023, 3]];

        return view('sports.today', [
            'today' => $today
        ]);
    }

    public function user()
    {
        return view('sports.user');
    }
}