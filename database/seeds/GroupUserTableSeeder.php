<?php

use App\GroupMember;
use Illuminate\Database\Seeder;

class GroupUserTableSeeder extends Seeder
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

        for ($groupId = 0; $groupId < 10; $groupId++) {

            for ($userId = 0; $userId < 20; $userId++) {
                GroupMember::create([
                    'userid' => $userId,
                    'groupid' => $groupId,

                ]);
            }

        }


    }
}
