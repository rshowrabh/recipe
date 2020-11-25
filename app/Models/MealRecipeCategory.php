<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRecipeCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_recipe_category';

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
    protected $fillable = ['name', 'description', 'created_by', 'approved', 'icon', 'slug'];

    
}
