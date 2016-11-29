<?php

use App\MyUser;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();

        for ($i = 0; $i < 100; $i++) {
            MyUser::create([
                'username' => 'user' . $i,
                'password' => 'pass' . $i,
                'realname' => 'name' . $i,
                'nickname' => 'nickname' . $i,
                'sex' => '男',

                'birthday' => strtotime('now'),
                'hobby' => '游泳,跑步',
                'introduction' => '个人简介',

                'sportrant' => '3',
                'steptarget' => '10000',
                'distancetarget' => '3000',
                'energytarget' => '5000',

            ]);
        }
    }
}
