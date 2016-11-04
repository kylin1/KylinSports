<?php
/**
 * Created by PhpStorm.
 * User: kylin
 * Date: 01/11/2016
 * Time: 08:47
 */

namespace App\Http\Controllers\Sport;

use App\Http\Controllers\Controller;

class SportController extends Controller{

    //今日界面：
    /**
     * 今天的数据（时间、步数、距离、能量）是否达到目标
     * @param $id
     */
    public function todayInfo($id){

    }

    /**
     * 今天的好友步数排名（好友名、步数、排名）
     * @param $id
     */
    public function friendRank($id){

    }

    //1.运动统计
    /**
     * 步数柱状图（每一天、每一天总步数）+ 分析结果
     * @param $id
     */
    public function stepBar($id){

    }

    /**
     * 心率折线图（每一天、每一天平均心率）+ 分析结果
     * @param $id
     */
    public function hearLine($id){

    }

    /**
     * 跑步历史柱状图（每一天、每一天公里）+ 分析结果
     * @param $id
     */
    public function runHistory($id){

    }

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

    //3.健康数据
    /**
     * 体重折线图（每一月、每一月体重）+ 分析结果
     * @param $id
     */
    public function weightLine($id){

    }

    /**
     * 体脂含量折线图（每一月、每一月体脂量）+ 分析结果
     * @param $id
     */
    public function fatRateLine($id){

    }

}