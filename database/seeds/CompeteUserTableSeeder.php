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
        DB::table('compete_user')->delete();

        for ($compete = 0; $compete < 5; $compete++) {

            for ($userId = 0; $userId < 200; $userId++) {
                CompeteMember::create([
                    'userid' => $userId,
                    'competeid' => $compete,

                    'percent' => rand(0,100),
                    'getbonus' => rand(0,1000),
                    'win' => rand(0,1),

                    'current' => rand(0,10)+0.5,
                ]);
            }

        }

    }
}
