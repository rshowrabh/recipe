<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealIngredient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_ingredents';

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
    protected $fillable = ['name', 'also_known', 'storage', 'shelf_life', 'is_healthy', 'parameter', 'description', 'directly_edible', 'images', 'image', 'thumb_image', 'category', 'calories', 'carbs', 'fats', 'protien', 'price', 'serving', 'food_group', 'per_gram_serving', 'fiber_in_gm', 'fiber_in_percent', 'sodium_in_mg', 'sodium_in_percent', 'potassium', 'cholesterol', 'approved', 'created_by', 'sugar', 'title', 'keyword', 'og_desc', 'og_title', 'facebook_img', 'twitter_img', 'tag1', 'image_title', 'meta_description', 'image_alt_tag', 'url_rewrite'];

    public function category()
    {
        return $this->belongsTo(MealIngredientCategory::class, 'category', 'id');
    }
}
