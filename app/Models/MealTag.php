<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealTag extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'meal_tags';

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
    protected $fillable = ['name', 'description', 'approved', 'color_code', 'meal_tag_categories_id'];

    
}
