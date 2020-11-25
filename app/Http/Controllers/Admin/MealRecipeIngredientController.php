<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredient;
use App\Models\MealRecipe;
use App\Models\MealRecipeIngredient;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $mealrecipeingredient = MealRecipeIngredient::where('recipe_id', 'LIKE', "%$keyword%")
                ->orWhere('ingredent_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('unit_measure', 'LIKE', "%$keyword%")
                ->orWhere('main_ingredient', 'LIKE', "%$keyword%")
                ->with('ingredient', 'recipe', 'mainIngredient')
                ->latest()->paginate($perPage);
        } else {
            $mealrecipeingredient = MealRecipeIngredient::with('ingredient', 'recipe', 'mainIngredient')->latest()->paginate($perPage);
        }

        return view('admin.meal-recipe-ingredient.index', compact('mealrecipeingredient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ingredients = MealIngredient::all();
        $recipes = MealRecipe::all();

        return view('admin.meal-recipe-ingredient.create', compact('ingredients', 'recipes'));
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

        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        MealRecipeIngredient::create($requestData);

        return redirect('admin/meal-recipe-ingredient')->with('flash_message', 'MealRecipeIngredient added!');
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
        $mealrecipeingredient = MealRecipeIngredient::with('ingredient', 'recipe', 'mainIngredient')->findOrFail($id);

        return view('admin.meal-recipe-ingredient.show', compact('mealrecipeingredient'));
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
        $ingredients = MealIngredient::all();
        $recipes = MealRecipe::all();
        $mealrecipeingredient = MealRecipeIngredient::findOrFail($id);

        return view('admin.meal-recipe-ingredient.edit', compact('mealrecipeingredient', 'ingredients', 'recipes'));
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

        $mealrecipeingredient = MealRecipeIngredient::findOrFail($id);
        $mealrecipeingredient->update($requestData);

        return redirect('admin/meal-recipe-ingredient')->with('flash_message', 'MealRecipeIngredient updated!');
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
        MealRecipeIngredient::destroy($id);

        return redirect('admin/meal-recipe-ingredient')->with('flash_message', 'MealRecipeIngredient deleted!');
    }
}
