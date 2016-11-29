<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weight', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('userid');
            $table->timestamp('date');

            $table->integer('weight');
            $table->integer('height');
            $table->integer('fatrate');
            $table->integer('weighttarget');

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
