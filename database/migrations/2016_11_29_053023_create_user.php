<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('username');
            $table->string('password');
            $table->string('realname');
            $table->string('nickname');

            $table->enum('sex',['男','女','未知']);

            $table->timestamp('birthday');
            $table->string('hobby');
            $table->string('introduction');

            $table->integer('sportrant');
            $table->integer('steptarget');
            $table->integer('distancetarget');
            $table->integer('energytarget');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
