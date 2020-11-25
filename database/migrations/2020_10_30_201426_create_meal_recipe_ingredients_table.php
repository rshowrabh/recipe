<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_recipe_ingredents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_id')->unsigned()->nullable(false);
            $table->integer('ingredent_id')->unsigned()->nullable(false);
            $table->string('quantity')->nullable(false);
            $table->integer('unit_measure')->nullable(false);
            $table->integer('main_ingredient')->nullable(false);
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
        Schema::drop('meal_recipe_ingredents');
    }
}
