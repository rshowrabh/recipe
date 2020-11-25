<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealIngredientCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_ingredient_category';

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
    protected $fillable = ['name', 'description', 'approved', 'icon', 'slug'];

    
}
