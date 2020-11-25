<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealPrimaryDietTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_primary_diet_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
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
        Schema::drop('meal_primary_diet_type');
    }
}
