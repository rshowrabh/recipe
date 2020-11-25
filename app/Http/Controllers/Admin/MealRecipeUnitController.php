<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MealRecipeUnitController extends Controller
{
    public function index(){
        $data = DB::table('meal_recipe_unit')->get();
        return response()->json($data);
    }
}
