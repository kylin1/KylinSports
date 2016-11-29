<?php

use App\Group;
use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group')->delete();

        for ($i = 0; $i < 100; $i++) {
            Group::create([
                'avatar' => '暂无',
                'name' => '团队' . $i,
                'membernum' => 100,
                'introduction' => '团队介绍信息',
            ]);
        }
    }
}
