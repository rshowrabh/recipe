<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRegion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_region';

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
    protected $fillable = ['cusine_id', 'name'];

    public function mealCuisine()
    {
        return $this->belongsTo(MealCuisine::class, 'cusine_id', 'id');
    }
}
