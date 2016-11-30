<?php

use App\User;
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
//        DB::table('users')->delete();

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => 'user' . $i,
                'email' => '1885678' . $i . '@163.com',
                'password' => 'pass' . $i,

                'nickname' => 'nickname' . $i,
                'birthday' => '1996-06-12',

                'sex' => '男',

                'hobby' => '游泳,跑步',
                'introduction' => '个人简介',

                'sportrank' => '3',
                'steptarget' => '10000',
                'distancetarget' => '3000',
                'energytarget' => '5000',

            ]);
        }
    }
}
