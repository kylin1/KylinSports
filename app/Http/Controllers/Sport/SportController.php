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


}