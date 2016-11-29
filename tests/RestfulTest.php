<?php


class RestfulTest extends TestCase
{

    public function test()
    {
//        for($userid = 5;$userid<=10;$userid++){
//            $this->post_daily($userid);
//            $this->post_hour($userid);
//        }
    }


    private function post_daily($userid)
    {
        //在一年之内每天
        $date = $this->getDateFromRange('2016-6-26', '2016-11-26');
        foreach ($date as $oneDay) {
            $this->post_daily_data($oneDay, $userid);
        }
    }

    private function post_daily_data($date, $userid)
    {
        $data = [
            'date' => $date,
            'calories' => rand(10000, 100000),
            'meters' => rand(1000, 10000),
            'steps' => rand(1000, 20000),
            'minutes' => rand(10, 600),
            'heartrate' => rand(70, 80),
            'sleepAt' => rand(10, 12),
            'wakeAt' => rand(6, 10),
            'total_minutes' => rand(360, 600)
        ];
        $this->post('http://localhost:8888/data/users/' . $userid . '/dailydata', $data);
    }

    private function post_hour($userid)
    {
        //一个用户
        $date = $this->getDateFromRange('2016-6-26', '2016-11-26');
        //在一年之内每天
        foreach ($date as $oneDay) {
            //每个小时1-24
            for ($hour = 1; $hour <= 24; $hour++) {
                $this->post_hourly_data($oneDay, $hour, $userid);
            }
        }

    }

    private function post_hourly_data($date, $hour, $userid)
    {
        $data = [
            'date' => $date,
            'hour' => $hour,
            'calories' => rand(50,1000),
            'meters' => rand(0,1000),
            'steps' => rand(0,3000),
            'minutes' => rand(0,60),
            'heartrate' => rand(60,100),
        ];
        $this->post('http://localhost:8888/data/users/' . $userid . '/hourdata', $data);
    }




    /**
     * 获取指定日期段内每一天的日期
     * @param  String $startdate 开始日期
     * @param  String $enddate 结束日期
     * @return Array
     */
    function getDateFromRange($startdate, $enddate)
    {

        $stimestamp = strtotime($startdate);
        $etimestamp = strtotime($enddate);

        // 计算日期段内有多少天
        $days = ($etimestamp - $stimestamp) / 86400 + 1;

        // 保存每天日期
        $date = array();

        for ($i = 0; $i < $days; $i++) {
            $date[] = date('Y-m-d', $stimestamp + (86400 * $i));
        }

        return $date;
    }

}
