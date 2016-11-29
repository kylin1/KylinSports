<?php

use App\FriendShip;
use Illuminate\Database\Seeder;

class UserUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->delete();

        for ($user1 = 0; $user1 < 10; $user1++) {

            for ($user2 = 20; $user2 < 50; $user2++) {
                FriendShip::create([
                    'user1id' => $user1,
                    'user2id' => $user2,
                ]);
            }

        }
    }
}
