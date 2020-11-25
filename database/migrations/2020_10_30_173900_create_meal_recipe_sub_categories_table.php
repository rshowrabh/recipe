<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealRecipeSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_recipe_sub_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_category_id')->unsigned()->nullable(false);
            $table->string('sub_category_name')->nullable(false);
            $table->text('description')->nullable(false);
            $table->integer('approved')->nullable(false)->default(1);
            $table->timestamps();

            $table->foreign('recipe_category_id')->references('id')->on('meal_recipe_category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meal_recipe_sub_category');
    }
}
