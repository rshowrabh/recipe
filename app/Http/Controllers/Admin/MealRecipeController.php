<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\MealCuisine;
use App\Models\MealDishType;
use App\Models\MealFestival;
use App\Models\MealIngredientMeasurement;
use App\Models\MealIngredient;
use App\Models\MealMeasurement;
use App\Models\MealChef;
use App\Models\MealRecipe;
use App\Models\MealRecipeIngredient;
use App\Models\MealRecipeCategory;
use App\Models\MealRecipeSubCategory;
use App\Models\MealRecipeSubSubCategory;
use App\Models\MealRegion;
use App\Models\MealTag;
use App\Util\FileUploadUtil;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $this->authorize(['isAdmin']);
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $mealrecipe = MealRecipe::where('title', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('recipe_leftover', 'LIKE', "%$keyword%")
                ->orWhere('recipe_origin', 'LIKE', "%$keyword%")
                ->orWhere('chef', 'LIKE', "%$keyword%")
                ->orWhere('also_known', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('thumb_image', 'LIKE', "%$keyword%")
                ->orWhere('imagealt', 'LIKE', "%$keyword%")
                ->orWhere('imagetitle', 'LIKE', "%$keyword%")
                ->orWhere('images', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('prep_time', 'LIKE', "%$keyword%")
                ->orWhere('cook_time', 'LIKE', "%$keyword%")
                ->orWhere('cook_time_to', 'LIKE', "%$keyword%")
                ->orWhere('yields', 'LIKE', "%$keyword%")
                ->orWhere('serving_size', 'LIKE', "%$keyword%")
                ->orWhere('recipe_unit', 'LIKE', "%$keyword%")
                ->orWhere('cooking_type', 'LIKE', "%$keyword%")
                ->orWhere('serving_description', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('sub_category', 'LIKE', "%$keyword%")
                ->orWhere('sub_sub_category', 'LIKE', "%$keyword%")
                ->orWhere('dish_type', 'LIKE', "%$keyword%")
                ->orWhere('single_serving', 'LIKE', "%$keyword%")
                ->orWhere('breakfast', 'LIKE', "%$keyword%")
                ->orWhere('keeps_well', 'LIKE', "%$keyword%")
                ->orWhere('calories', 'LIKE', "%$keyword%")
                ->orWhere('directions', 'LIKE', "%$keyword%")
                ->orWhere('positive_point', 'LIKE', "%$keyword%")
                ->orWhere('tags', 'LIKE', "%$keyword%")
                ->orWhere('url_rewrite', 'LIKE', "%$keyword%")
                ->orWhere('meta_title', 'LIKE', "%$keyword%")
                ->orWhere('meta_desctiption', 'LIKE', "%$keyword%")
                ->orWhere('meta_tags', 'LIKE', "%$keyword%")
                ->orWhere('festivals', 'LIKE', "%$keyword%")
                ->orWhere('main_dish', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('region', 'LIKE', "%$keyword%")
                ->orWhere('cuisine_type', 'LIKE', "%$keyword%")
                ->orWhere('full_description', 'LIKE', "%$keyword%")
                ->orWhere('calorie', 'LIKE', "%$keyword%")
                ->orWhere('protien', 'LIKE', "%$keyword%")
                ->orWhere('fat', 'LIKE', "%$keyword%")
                ->orWhere('fiber', 'LIKE', "%$keyword%")
                ->orWhere('carbs', 'LIKE', "%$keyword%")
                ->orWhere('recipe_price', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('recurring_enable', 'LIKE', "%$keyword%")
                ->orWhere('breakfast_food', 'LIKE', "%$keyword%")
                ->orWhere('recipe_likes', 'LIKE', "%$keyword%")
                ->orWhere('per_serving_calories', 'LIKE', "%$keyword%")
                ->orWhere('meal_complexity_id', 'LIKE', "%$keyword%")
                ->orWhere('sugar', 'LIKE', "%$keyword%")
                ->orWhere('saturated_fat', 'LIKE', "%$keyword%")
                ->orWhere('cholesterol', 'LIKE', "%$keyword%")
                ->orWhere('is_basic_food', 'LIKE', "%$keyword%")
                ->orWhere('type_seasonal_recipe', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealrecipe = MealRecipe::latest()->paginate($perPage);
        }

        return view('admin.meal-recipe.index', compact('mealrecipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $MealChef = MealChef::all();
        $mealCookingType =DB::table('meal_cooking_type')->get();
        $mealRecipeCategories = MealRecipeCategory::all();
        $mealRecipeSubCategories = MealRecipeSubCategory::all();
        $mealRecipeSubSubCategories = MealRecipeSubSubCategory::all();
        $mealRegions = MealRegion::all();
        $mealCuisines = MealCuisine::all();
        $mealDishTypes = MealDishType::all();
        $mealFestivals = MealFestival::all();
        $mealTags = MealTag::all();
        $mealIngredient = MealIngredient::all();
        $mealMeasurement = MealMeasurement::all();
        $mealUnits = DB::table('meal_recipe_unit')->get();
        $mealSeasons = DB::table('meal_seasons')->get();
        $mealComplexity = DB::table('meal_complexity')->get();
        $mealState = DB::table('meal_state')->get();

        return view('admin.meal-recipe.create', compact(
            'MealChef','mealRecipeCategories', 'mealRecipeSubCategories', 'mealRecipeSubSubCategories', 'mealRegions',
            'mealCuisines', 'mealDishTypes', 'mealFestivals', 'mealTags', 'mealIngredient','mealUnits','mealSeasons','mealComplexity','mealCookingType','mealMeasurement','mealState'));
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        // return $request->all();
        $measures =  $request->mealIngredient;
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['images'] = FileUploadUtil::uploadFileMultiple($request->file('images'));
        $requestData['image'] = FileUploadUtil::uploadFile($request->file('image'));
        $requestData['thumb_image'] = FileUploadUtil::uploadFile($request->file('thumb_image'));

        $calory = 0;
        $carbs = 0;
        $fats = 0;
        $protein = 0;
        $price = 0;
        $sugar = 0;
        $cholesterol  = 0;
        $fiber  = 0;
        $perservingCalories  = 0;
        foreach($measures as $index => $data ){
            $meal = MealIngredientMeasurement::
             where('ingredent_id',$request->mealIngredient[$index])
            ->where('measurement_id',$request->mealMeasurement[$index])
            ->first();
            $per = $meal->ingredient->per_gram_serving;
            $m = $meal->measure;

            $calory = $calory + ($meal->ingredient->calories * $m* $request->quantity[$index])/$per;
            $carbs = $carbs + ($meal->ingredient->carbs * $m* $request->quantity[$index])/$per;
            $fats = $fats + ($meal->ingredient->fats * $m* $request->quantity[$index])/$per;
            $protein = $protein + ($meal->ingredient->protein * $m* $request->quantity[$index])/$per;
            $price = $price + ($meal->ingredient->price * $m* $request->quantity[$index])/$per;
            $sugar = $sugar + ($meal->ingredient->sugar * $m* $request->quantity[$index])/$per;
            $cholesterol  = $cholesterol  + ($meal->ingredient->cholesterol  * $m* $request->quantity[$index])/$per;
            $fiber  = $fiber  + ($meal->ingredient->fiber_in_gm  * $m* $request->quantity[$index])/$per;
            $perservingCalories  = $perservingCalories  + $meal->ingredient->calories / $request->quantity[$index];
        }
        
        $requestData['calorie'] = $calory;
        $requestData['calories'] = $calory;
        $requestData['carbs'] = $carbs;
        $requestData['fat'] = $fats;
        $requestData['protein'] = $protein;
        $requestData['price'] = $price;
        $requestData['sugar'] = $sugar;
        $requestData['cholesterol'] = $cholesterol;
        $requestData['yields'] = 4;
        $requestData['fiber'] = $fiber;
        $requestData['per_serving_calories'] = $perservingCalories;
        $requestData['cook_time_to'] = $request->cook_time + $request->prep_time;
        $requestData['url_rewrite'] = Str::slug($request->name, '-');
        // return $requestData;
        
       $recipe =  MealRecipe::create($requestData);
       $recipe_id = $recipe->id;
       foreach($measures as $index => $item ){
        $data = MealIngredientMeasurement::where('ingredent_id',$request->mealIngredient[$index])->where('measurement_id',$request->mealMeasurement[$index])->first();
 
        MealRecipeIngredient::create([
           'ingredent_id' => $data->ingredient->id,
           'recipe_id' => $recipe_id,
           'meal_state' => $request->meal_state[$index],
           'in_order' => $request->in_order[$index],
           'quantity' => $request->quantity[$index],
           'main_ingredient' => 0,
           'unit_measure' => 0,
        ]);

       }
       
        return redirect('admin/meal-recipe')->with('flash_message', 'MealRecipe added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $mealrecipe = MealRecipe::findOrFail($id);

        return view('admin.meal-recipe.show', compact('mealrecipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $MealChef = MealChef::all();
        $mealCookingType =DB::table('meal_cooking_type')->get();
        $mealRecipeCategories = MealRecipeCategory::all();
        $mealRecipeSubCategories = MealRecipeSubCategory::all();
        $mealRecipeSubSubCategories = MealRecipeSubSubCategory::all();
        $mealRegions = MealRegion::all();
        $mealCuisines = MealCuisine::all();
        $mealDishTypes = MealDishType::all();
        $mealFestivals = MealFestival::all();
        $mealTags = MealTag::all();
        $mealIngredient = MealIngredient::all();
        $mealMeasurement = MealMeasurement::all();
        $mealUnits = DB::table('meal_recipe_unit')->get();
        $mealSeasons = DB::table('meal_seasons')->get();
        $mealComplexity = DB::table('meal_complexity')->get();
        $mealState = DB::table('meal_state')->get();

        $mealrecipe = MealRecipe::findOrFail($id);

        return view('admin.meal-recipe.edit', compact('MealChef','mealrecipe',
            'mealRecipeCategories', 'mealRecipeSubCategories', 'mealRecipeSubSubCategories',
            'mealRegions', 'mealCuisines', 'mealDishTypes', 'mealFestivals', 'mealTags','mealIngredient','mealUnits','mealSeasons','mealComplexity','mealCookingType','mealMeasurement','mealState'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['images'] = FileUploadUtil::uploadFileMultiple($request->file('images'));
        $requestData['image'] = FileUploadUtil::uploadFile($request->file('image'));
        $requestData['thumb_image'] = FileUploadUtil::uploadFile($request->file('thumb_image'));

        $mealrecipe = MealRecipe::findOrFail($id);
        $measures =  $request->mealIngredient;

  
        $calory = 0;
        $carbs = 0;
        $fats = 0;
        $protein = 0;
        $price = 0;
        $sugar = 0;
        $cholesterol  = 0;
        $fiber  = 0;
        $perservingCalories  = 0;
        // return $request->mealMeasurement[0];
        foreach($measures as $index => $data){
            $meal = MealIngredientMeasurement::
             where('ingredent_id',$request->mealIngredient[$index])
            ->where('measurement_id',$request->mealMeasurement[$index])
            ->first();
            $per = $meal->ingredient->per_gram_serving;
            $m = $meal->measure;

            $calory = $calory + ($meal->ingredient->calories * $m* $request->quantity[$index])/$per;
            $carbs = $carbs + ($meal->ingredient->carbs * $m* $request->quantity[$index])/$per;
            $fats = $fats + ($meal->ingredient->fats * $m* $request->quantity[$index])/$per;
            $protein = $protein + ($meal->ingredient->protein * $m* $request->quantity[$index])/$per;
            $price = $price + ($meal->ingredient->price * $m* $request->quantity[$index])/$per;
            $sugar = $sugar + ($meal->ingredient->sugar * $m* $request->quantity[$index])/$per;
            $cholesterol  = $cholesterol  + ($meal->ingredient->cholesterol  * $m* $request->quantity[$index])/$per;
            $fiber  = $fiber  + ($meal->ingredient->fiber_in_gm  * $m* $request->quantity[$index])/$per;
            $perservingCalories  = $perservingCalories  + $meal->ingredient->calories / $request->quantity[$index];
        }
        
        $requestData['calorie'] = $calory;
        $requestData['calories'] = $calory;
        $requestData['carbs'] = $carbs;
        $requestData['fat'] = $fats;
        $requestData['protein'] = $protein;
        $requestData['price'] = $price;
        $requestData['sugar'] = $sugar;
        $requestData['cholesterol'] = $cholesterol;
        $requestData['yields'] = 4;
        $requestData['fiber'] = $fiber;
        $requestData['per_serving_calories'] = $perservingCalories;
        $requestData['url_rewrite'] = Str::slug($request->name, '-');
        $requestData['cook_time_to'] = $request->cook_time + $request->prep_time;      
        $requestData['festivals'] = str_replace(['[',']','"'], '',json_encode($requestData['festivals']));
        $requestData['tags'] = str_replace(['[',']','"'], '',json_encode($requestData['tags']));


        // return $requestData;
        
       $recipe =   $mealrecipe->update($requestData);

        $recipe_id = $id;
        foreach($measures as $index => $item ){
          $data = MealIngredientMeasurement::where('ingredent_id',$request->mealIngredient[$index])->where('measurement_id',$request->mealMeasurement[$index])->first();
 
          MealRecipeIngredient::create([
             'ingredent_id' => $data->ingredient->id,
             'recipe_id' => $recipe_id,
             'meal_state' => $request->meal_state[$index],
             'in_order' => $request->in_order[$index],
             'quantity' => $request->quantity[$index],
             'main_ingredient' => 0,
             'unit_measure' => 0,
          ]);
 
        }

        return redirect('admin/meal-recipe')->with('flash_message', 'MealRecipe updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        MealRecipe::destroy($id);

        return redirect('admin/meal-recipe')->with('flash_message', 'MealRecipe deleted!');
    }
}
