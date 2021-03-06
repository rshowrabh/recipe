<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealRecipeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_recipe_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('created_by')->nullable(false);
            $table->integer('approved')->nullable(false)->default(1);
            $table->text('icon')->nullable(false);
            $table->string('slug')->nullable(true)->default(null);
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
        Schema::drop('meal_recipe_category');
    }
}
