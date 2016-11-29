<?php

use App\Competition;
use Illuminate\Database\Seeder;

class CompetitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competition')->delete();

        for ($i = 0; $i < 100; $i++) {
            Competition::create([
                'name' => '竞赛' . $i,
                'target' => '跑步最先到达100公里者胜利',
                'number' => 50,
                'type' => '个人赛',

                'bonus' => '1000金币',
                'rule' => '不准摇晃手机骗取距离',
                'rulemore' => '更多信息',

                'startAt' => strtotime('now'),
                'endAt' => strtotime("+10 days"),
                'startid' => $i,

            ]);
        }
    }
}
