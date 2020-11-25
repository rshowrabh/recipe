<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealIngredientMeasurement extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_ingredent_measurements';

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
    protected $fillable = ['ingredent_id', 'measurement_id', 'measure'];

    public function ingredient()
    {
        return $this->belongsTo(MealIngredient::class, 'ingredent_id', 'id');
    }

    public function measurement()
    {
        return $this->belongsTo(MealMeasurement::class, 'measurement_id', 'id');
    }
}
