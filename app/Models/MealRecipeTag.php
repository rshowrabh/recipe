<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRecipeTag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_recipe_tags';

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
    protected $fillable = ['recipe_id', 'tag_id'];

    public function recipe()
    {
        return $this->belongsTo(MealRecipe::class, 'recipe_id', 'id');
    }

    public function tag()
    {
        return $this->belongsTo(MealTag::class, 'tag_id', 'id');
    }
}
