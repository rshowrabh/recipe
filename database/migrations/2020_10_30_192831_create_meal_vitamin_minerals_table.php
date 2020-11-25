<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMealVitaminMineralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_vitamins_minerals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vitamin_a')->nullable(true)->default(null);
            $table->string('vitamin_b6')->nullable(true)->default(null);
            $table->string('vitamin_b12')->nullable(true)->default(null);
            $table->string('vitamin_c')->nullable(true)->default(null);
            $table->string('vitamin_d')->nullable(true)->default(null);
            $table->string('vitamin_d2')->nullable(true)->default(null);
            $table->string('vitamin_d3')->nullable(true)->default(null);
            $table->string('vitamin_e')->nullable(true)->default(null);
            $table->string('vitamin_k')->nullable(true)->default(null);
            $table->string('calcium')->nullable(true)->default(null);
            $table->string('iron')->nullable(true)->default(null);
            $table->string('magnesium')->nullable(true)->default(null);
            $table->string('phosphorus')->nullable(true)->default(null);
            $table->string('zinc')->nullable(true)->default(null);
            $table->string('copper')->nullable(true)->default(null);
            $table->string('manganese')->nullable(true)->default(null);
            $table->string('selenium')->nullable(true)->default(null);
            $table->string('retinol')->nullable(true)->default(null);
            $table->string('thiamine')->nullable(true)->default(null);
            $table->string('riboflavin')->nullable(true)->default(null);
            $table->string('niacin')->nullable(true)->default(null);
            $table->string('folate')->nullable(true)->default(null);
            $table->string('choline')->nullable(true)->default(null);
            $table->string('betaine')->nullable(true)->default(null);
            $table->string('caffeine')->nullable(true)->default(null);
            $table->string('lycopene')->nullable(true)->default(null);
            $table->string('fluoride')->nullable(true)->default(null);
            $table->string('water')->nullable(true)->default(null);
            $table->string('calcium_in_percent')->nullable(true)->default(null);
            $table->string('choline_in_percent')->nullable(true)->default(null);
            $table->string('copper_in_percent')->nullable(true)->default(null);
            $table->string('folate_in_percent')->nullable(true)->default(null);
            $table->string('iron_in_percent')->nullable(true)->default(null);
            $table->string('magnesium_in_percent')->nullable(true)->default(null);
            $table->string('manganese_in_percent')->nullable(true)->default(null);
            $table->string('niacin_in_percent')->nullable(true)->default(null);
            $table->string('phosphorus_in_percent')->nullable(true)->default(null);
            $table->string('riboflavin_in_percent')->nullable(true)->default(null);
            $table->string('thiamine_in_percent')->nullable(true)->default(null);
            $table->string('selenium_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_a_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_b6_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_b12_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_c_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_d_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_e_in_percent')->nullable(true)->default(null);
            $table->string('vitamin_k_in_percent')->nullable(true)->default(null);
            $table->string('zinc_in_percent')->nullable(true)->default(null);
            $table->integer('ingredent_id')->unsigned()->nullable(true)->default(null);
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
        Schema::drop('meal_vitamins_minerals');
    }
}
