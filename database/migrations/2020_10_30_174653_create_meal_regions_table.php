<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_region', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cusine_id')->unsigned()->nullable(false);
            $table->string('name')->nullable(false);
            $table->timestamps();

            $table->foreign('cusine_id')->references('id')->on('meal_cuisine')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meal_region');
    }
}
