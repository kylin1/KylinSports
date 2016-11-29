<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionTabl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('target');

            $table->integer('number');
            $table->string('type');

            $table->string('bonus');
            $table->string('rule');
            $table->string('rulemore');

            $table->timestamp('startAt');
            $table->timestamp('endAt');

            $table->integer('startid');

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
