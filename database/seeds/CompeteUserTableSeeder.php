<?php

use App\CompeteMember;
use App\Weight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompeteUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::table('group_user')->delete();

        for ($compete = 0; $compete < 50; $compete++) {

            for ($userId = 0; $userId < 20; $userId++) {
                CompeteMember::create([
                    'userid' => $userId,
                    'competeid' => $compete,

                    'percent' => rand(0,100),
                    'getbonus' => rand(0,1000),
                    'win' => rand(0,1),

                ]);
            }

        }

    }
}
