<?php

use App\Weight;
use Illuminate\Database\Seeder;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();

        for ($userid = 0; $userid < 100; $userid++) {

            for ($day = 0; $day < 100; $day++) {
                $time = "- " .$day . "days";

                Weight::create([
                    'userid' => $userid,

                    'date' => strtotime($time),
                    'weight' => rand(60,70),
                    'height' => 175,
                    'fatrate' => rand(20,25),
                    'weighttarget' => 65,
                ]);
            }

        }
    }
}
