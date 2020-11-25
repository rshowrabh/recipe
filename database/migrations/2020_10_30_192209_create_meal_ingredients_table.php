<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_ingredents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('also_known')->nullable(true)->default(null);
            $table->string('storage')->nullable(false);
            $table->string('shelf_life')->nullable(false);
            $table->tinyInteger('is_healthy')->nullable(false)->default(1);
            $table->string('parameter')->nullable(false);
            $table->text('description')->nullable(false);
            $table->integer('directly_edible')->nullable(false)->default(0);
            $table->text('images')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('thumb_image')->nullable(false);
            $table->integer('category')->nullable(false);
            $table->string('calories')->nullable(false);
            $table->string('carbs')->nullable(false);
            $table->string('fats')->nullable(false);
            $table->string('protien')->nullable(false);
            $table->string('price')->nullable(false);
            $table->string('serving')->nullable(false);
            $table->integer('food_group')->nullable(false);
            $table->string('per_gram_serving')->nullable(false);
            $table->string('fiber_in_gm')->nullable(false);
            $table->string('fiber_in_percent')->nullable(false);
            $table->string('sodium_in_mg')->nullable(false);
            $table->string('sodium_in_percent')->nullable(false);
            $table->string('potassium')->nullable(false);
            $table->string('cholesterol')->nullable(false);
            $table->integer('approved')->nullable(false)->default(1);
            $table->string('created_by')->nullable(false)->default('admin');
            $table->integer('sugar')->nullable(false)->default(0);
            $table->string('title')->nullable(true)->default(null);
            $table->string('keyword')->nullable(false);
            $table->string('og_desc')->nullable(false);
            $table->string('og_title')->nullable(false);
            $table->string('facebook_img')->nullable(false);
            $table->string('twitter_img')->nullable(false);
            $table->string('tag1')->nullable(false);
            $table->string('image_title')->nullable(false);
            $table->text('meta_description')->nullable(false);
            $table->string('image_alt_tag')->nullable(true)->default(null);
            $table->string('url_rewrite')->nullable(true)->default(null);
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
        Schema::drop('meal_ingredents');
    }
}
