<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealDisease extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_diseases';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'symptoms', 'food_to_eaten', 'food_to_avoid', 'status'];

    
}
