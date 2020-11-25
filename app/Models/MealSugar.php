<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealSugar extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_sugars';

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
    protected $fillable = ['ingredent_id', 'sugar', 'sucrose', 'glucose', 'fructose', 'lactose', 'maltose', 'glactose'];

    public function ingredient()
    {
        return $this->belongsTo(MealIngredient::class, 'ingredent_id', 'id');
    }
}
