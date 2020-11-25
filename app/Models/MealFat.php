<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealFat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_fats';

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
    protected $fillable = ['ingredent_id', 'saturated_fat', 'mono_unsaturated_fat', 'poly_unsaturated_fat', 'trans_fat', 'omega_3_fatty_acid', 'omega_6_fatty_acid'];

    public function ingredient()
    {
        return $this->belongsTo(MealIngredient::class, 'ingredent_id', 'id');
    }
}
