<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealSugarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_sugars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredent_id')->unsigned()->nullable(false);
            $table->string('sugar')->nullable(true)->default(null);
            $table->string('sucrose')->nullable(true)->default(null);
            $table->string('glucose')->nullable(true)->default(null);
            $table->string('fructose')->nullable(true)->default(null);
            $table->string('lactose')->nullable(true)->default(null);
            $table->string('maltose')->nullable(true)->default(null);
            $table->string('glactose')->nullable(true)->default(null);
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
        Schema::drop('meal_sugars');
    }
}
