<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompeteUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compete_user', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('userid');
            $table->integer('competeid');
            $table->integer('percent');
            $table->integer('getbonus');
            $table->integer('win');

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
