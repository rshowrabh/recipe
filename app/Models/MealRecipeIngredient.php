<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRecipeIngredient extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_recipe_ingredents';

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
    protected $fillable = ['recipe_id', 'ingredent_id', 'quantity', 'unit_measure', 'main_ingredient','meal_state','in_order'];

    public function ingredient()
    {
        return $this->belongsTo(MealIngredient::class, 'ingredent_id', 'id');
    }

    public function mainIngredient()
    {
        return $this->belongsTo(MealIngredient::class, 'main_ingredient', 'id');
    }

    public function recipe()
    {
        return $this->belongsTo(MealRecipe::class, 'recipe_id', 'id');
    }
}
