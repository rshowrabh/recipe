<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRecipeSubSubCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_recipe_sub_sub_category';

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
    protected $fillable = ['recipe_sub_category_id', 'sub_sub_category_name', 'description', 'approved'];

    public function mealRecipeSubCategory()
    {
        return $this->belongsTo(MealRecipeSubCategory::class, 'recipe_sub_category_id', 'id');
    }
}
