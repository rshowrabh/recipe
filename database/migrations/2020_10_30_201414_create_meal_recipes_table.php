<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_recipe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable(false);
            $table->string('name')->nullable(false);
            $table->integer('recipe_leftover')->nullable(false)->default(0);
            $table->string('recipe_origin')->nullable(false);
            $table->string('chef')->nullable(false);
            $table->string('also_known')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('thumb_image')->nullable(true)->default(null);
            $table->string('imagealt')->nullable(false);
            $table->string('imagetitle')->nullable(false);
            $table->text('images')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('prep_time')->nullable(false);
            $table->string('cook_time')->nullable(false)->default('0');
            $table->string('cook_time_to')->nullable(false)->default('0');
            $table->string('yields')->nullable(false);
            $table->string('serving_size')->nullable(false);
            $table->string('recipe_unit')->nullable(false)->default('none');
            $table->string('cooking_type')->nullable(false);
            $table->string('serving_description')->nullable(false);
            $table->integer('category')->unsigned(false);
            $table->integer('sub_category')->unsigned(false)->default(0);
            $table->integer('sub_sub_category')->unsigned(false)->default(0);
            $table->string('dish_type')->nullable(false)->comment('1 for veg, 0 for non-veg');
            $table->string('single_serving')->nullable(false);
            $table->string('breakfast')->nullable(false);
            $table->string('keeps_well')->nullable(false);
            $table->string('calories')->nullable(false);
            $table->text('directions')->nullable(false);
            $table->string('positive_point')->nullable(false);
            $table->text('tags')->nullable(false);
            $table->string('url_rewrite')->nullable(false);
            $table->string('meta_title')->nullable(false);
            $table->string('meta_desctiption')->nullable(false);
            $table->string('meta_tags')->nullable(false);
            $table->string('festivals')->nullable(false);
            $table->string('main_dish')->nullable(false)->comment('0 for sidedish, 1 for maindish');
            $table->integer('approved')->unsigned()->nullable(false)->default(0);
            $table->string('created_by')->nullable(false)->default('admin');
            $table->integer('region')->unsigned()->nullable(false);
            $table->integer('cuisine_type')->unsigned()->nullable(false);
            $table->text('full_description')->nullable(false);
            $table->integer('calorie')->nullable(false);
            $table->string('protien')->nullable(false);
            $table->string('fat')->nullable(false);
            $table->string('fiber')->nullable(false);
            $table->string('carbs')->nullable(false);
            $table->string('recipe_price')->nullable(false);
            $table->string('price')->nullable(false);
            $table->integer('recurring_enable')->nullable(false)->default(0);
            $table->integer('breakfast_food')->unsigned(false)->default(0);
            $table->integer('recipe_likes')->unsigned(false)->default(0);
            $table->double('per_serving_calories')->nullable(false)->default(0.00);
            $table->integer('meal_complexity_id')->nullable(true)->default(null);
            $table->double('sugar')->nullable(false)->default(0.00);
            $table->double('saturated_fat')->nullable(false)->default(0.00);
            $table->double('cholesterol')->nullable(false)->default(0.00);
            $table->tinyInteger('is_basic_food')->nullable(false)->default(0)->comment('0-No,1-Yes');
            $table->tinyInteger('type_seasonal_recipe')->nullable(false)->default(1)->comment('1-All,2-Spring,3-
Autumn,4-Winter,5-Summer');
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
        Schema::drop('meal_recipe');
    }
}
