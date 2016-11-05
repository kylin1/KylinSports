<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:48
 */

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SleepController extends Controller{

    //2.睡眠统计：
    /**
     * 睡眠柱状图（每一天、每一天睡眠总时间）
     * @param $id
     */
    public function sleepBar($id){

    }

    /**
     * 详细睡眠table：（日期、入睡时间、起床时间、时长）+ 本周平均时间
     * @param $id
     */
    public function sleepDetail($id){

    }
}