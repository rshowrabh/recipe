<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRecipe extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_recipe';

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
    protected $fillable = ['title', 'name', 'recipe_leftover', 'recipe_origin', 'chef', 'also_known', 'image', 'thumb_image', 'imagealt', 'imagetitle', 'images', 'description', 'prep_time', 'cook_time', 'cook_time_to', 'yields', 'serving_size', 'recipe_unit', 'cooking_type', 'serving_description', 'category', 'sub_category', 'sub_sub_category', 'dish_type', 'single_serving', 'breakfast', 'keeps_well', 'calories', 'directions', 'positive_point', 'tags', 'url_rewrite', 'meta_title', 'meta_desctiption', 'meta_tags', 'festivals', 'main_dish', 'approved', 'created_by', 'region', 'cuisine_type', 'full_description', 'calorie', 'protien', 'fat', 'fiber', 'carbs', 'recipe_price', 'price', 'recurring_enable', 'breakfast_food', 'recipe_likes', 'per_serving_calories', 'meal_complexity_id', 'sugar', 'saturated_fat', 'cholesterol', 'is_basic_food', 'type_seasonal_recipe'];

    public function mealRecipeCategory()
    {
        return $this->belongsTo(MealRecipeCategory::class, 'category', 'id');
    }

    public function mealRecipeSubCategory()
    {
        return $this->belongsTo(MealRecipeSubCategory::class, 'sub_category', 'id');
    }

    public function mealRecipeSubSubCategory()
    {
        return $this->belongsTo(MealRecipeSubSubCategory::class, 'sub_sub_category', 'id');
    }

    public function mealRegion()
    {
        return $this->belongsTo(MealRegion::class, 'region', 'id');
    }

    public function mealCuisine()
    {
        return $this->belongsTo(MealCuisine::class, 'cuisine_type', 'id');
    }
}
