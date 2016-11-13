<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyData2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('daily_data', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('userid');
            $table->string('date');

            $table->integer('calories');
            $table->integer('meters');
            $table->integer('steps');
            $table->integer('minutes');
            $table->integer('heartrate');

            $table->timestamp('sleepAt');
            $table->timestamp('wakeAt');
            $table->integer('total_minutes');


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
