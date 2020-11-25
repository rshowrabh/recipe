<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealRecipe;
use App\Models\MealRecipeTag;
use App\Models\MealTag;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeTagController extends Controller
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
            $mealrecipetag = MealRecipeTag::where('recipe_id', 'LIKE', "%$keyword%")
                ->orWhere('tag_id', 'LIKE', "%$keyword%")
                ->with('recipe', 'tag')
                ->latest()->paginate($perPage);
        } else {
            $mealrecipetag = MealRecipeTag::with('recipe', 'tag')->latest()->paginate($perPage);
        }

        return view('admin.meal-recipe-tag.index', compact('mealrecipetag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $recipes = MealRecipe::all();
        $tags = MealTag::all();

        return view('admin.meal-recipe-tag.create', compact('recipes', 'tags'));
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

        MealRecipeTag::create($requestData);

        return redirect('admin/meal-recipe-tag')->with('flash_message', 'MealRecipeTag added!');
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
        $mealrecipetag = MealRecipeTag::with('recipe', 'tag')->findOrFail($id);

        return view('admin.meal-recipe-tag.show', compact('mealrecipetag'));
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
        $recipes = MealRecipe::all();
        $tags = MealTag::all();
        $mealrecipetag = MealRecipeTag::findOrFail($id);

        return view('admin.meal-recipe-tag.edit', compact('mealrecipetag', 'recipes', 'tags'));
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

        $mealrecipetag = MealRecipeTag::findOrFail($id);
        $mealrecipetag->update($requestData);

        return redirect('admin/meal-recipe-tag')->with('flash_message', 'MealRecipeTag updated!');
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
        MealRecipeTag::destroy($id);

        return redirect('admin/meal-recipe-tag')->with('flash_message', 'MealRecipeTag deleted!');
    }
}
