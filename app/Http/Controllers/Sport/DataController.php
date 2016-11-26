<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 03/11/2016
 * Time: 23:48
 */

namespace App\Http\Controllers\Sport;

use App\DayData;
use App\HourData;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect,
    Illuminate\Support\Facades\Input,
    Illuminate\Http\Request;

class DataController extends Controller {

    private function getToday(){
        return "2016-11-13";
    }

    public function newDailyData(Request $request,$uid){
        $dayData = new DayData;

        //读取主键信息
        $dayData->userId = $uid;
        $dayData->date = Input::get('date');

        //读取post参数
        $dayData->calories = Input::get('calories');
        $dayData->meters = Input::get('meters');
        $dayData->steps = Input::get('steps');
        $dayData->minutes = Input::get('minutes');
        $dayData->heartrate = Input::get('heartrate');
        $dayData->sleepAt = Input::get('sleepAt');
        $dayData->wakeAt = Input::get('wakeAt');
        $dayData->total_minutes = Input::get('total_minutes');

        //存入数据库
        $dayData->save();
    }

    public function getDailyData($uid){
        $date = Input::get('date');
        $dayData = DayData::find($uid,$date);
        return $dayData;
    }

    public function newHourlyData(Request $request,$uid){
        $hourData = new HourData();

        //读取主键信息
        $hourData->userId = $uid;
        $hourData->date = Input::get('date');
        $hourData->hour = Input::get('hour');


        //读取post参数
        $hourData->calories = Input::get('calories');
        $hourData->meters = Input::get('meters');
        $hourData->steps = Input::get('steps');
        $hourData->minutes = Input::get('minutes');
        $hourData->heartrate = Input::get('heartrate');

        //存入数据库
        $hourData->save();
    }

    public function getHourlyData($uid){
        return "getHourlyData uid=" .$uid;
    }


}