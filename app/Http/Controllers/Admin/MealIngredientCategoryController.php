<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredientCategory;
use App\Util\FileUploadUtil;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealIngredientCategoryController extends Controller
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
            $mealingredientcategory = MealIngredientCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealingredientcategory = MealIngredientCategory::latest()->paginate($perPage);
        }

        return view('admin.meal-ingredient-category.index', compact('mealingredientcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-ingredient-category.create');
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'slug' => 'required|max:30|unique:meal_ingredient_category'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['icon'] = FileUploadUtil::uploadFile($request->file('icon'));

        MealIngredientCategory::create($requestData);

        return redirect('admin/meal-ingredient-category')->with('flash_message', 'MealIngredientCategory added!');
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
        $mealingredientcategory = MealIngredientCategory::findOrFail($id);

        return view('admin.meal-ingredient-category.show', compact('mealingredientcategory'));
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
        $mealingredientcategory = MealIngredientCategory::findOrFail($id);

        return view('admin.meal-ingredient-category.edit', compact('mealingredientcategory'));
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
            'slug' => 'required|max:30|unique:meal_ingredient_category,slug,' . $id
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['icon'] = FileUploadUtil::uploadFile($request->file('icon'));

        $mealingredientcategory = MealIngredientCategory::findOrFail($id);
        $mealingredientcategory->update($requestData);

        return redirect('admin/meal-ingredient-category')->with('flash_message', 'MealIngredientCategory updated!');
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
        MealIngredientCategory::destroy($id);

        return redirect('admin/meal-ingredient-category')->with('flash_message', 'MealIngredientCategory deleted!');
    }
}
