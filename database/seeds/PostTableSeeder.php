<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->delete();

        for ($i = 0; $i < 80; $i++) {
            Post::create([
                'createdAt' => strtotime('now'),
                'content' => '一个动态的内容如下:今天我运动了10公里,好开心啊啊啊',
                'userid' => $i,

            ]);
        }

    }
}
