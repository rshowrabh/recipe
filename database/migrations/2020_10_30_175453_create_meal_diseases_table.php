<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealDiseasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_diseases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true);
            $table->text('symptoms')->nullable(false);
            $table->text('food_to_eaten')->nullable(false);
            $table->text('food_to_avoid')->nullable(false);
            $table->tinyInteger('status')->nullable(false)->default(0)->comment('0-inactive,1-active');
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
        Schema::drop('meal_diseases');
    }
}
