<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealFatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_fats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ingredent_id')->unsigned()->nullable(false);
            $table->string('saturated_fat')->nullable(false);
            $table->string('mono_unsaturated_fat')->nullable(false);
            $table->string('poly_unsaturated_fat')->nullable(false);
            $table->string('trans_fat')->nullable(false);
            $table->string('omega_3_fatty_acid')->nullable(false);
            $table->string('omega_6_fatty_acid')->nullable(false);
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
        Schema::drop('meal_fats');
    }
}
