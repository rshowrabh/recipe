<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealRecipeCategory;
use App\Models\MealRecipeSubCategory;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeSubCategoryController extends Controller
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
            $mealrecipesubcategory = MealRecipeSubCategory::where('recipe_category_id', 'LIKE', "%$keyword%")
                ->orWhere('sub_category_name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->with('mealRecipeCategory')
                ->latest()->paginate($perPage);
        } else {
            $mealrecipesubcategory = MealRecipeSubCategory::with('mealRecipeCategory')->latest()->paginate($perPage);
        }

        return view('admin.meal-recipe-sub-category.index', compact('mealrecipesubcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $mealRecipeCategories = MealRecipeCategory::all();

        return view('admin.meal-recipe-sub-category.create', compact('mealRecipeCategories'));
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
            'sub_category_name' => 'required',
            'description' => 'required',
            'approved' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        MealRecipeSubCategory::create($requestData);

        return redirect('admin/meal-recipe-sub-category')->with('flash_message', 'MealRecipeSubCategory added!');
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
        $mealrecipesubcategory = MealRecipeSubCategory::with('mealRecipeCategory')->findOrFail($id);

        return view('admin.meal-recipe-sub-category.show', compact('mealrecipesubcategory'));
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
        $mealRecipeCategories = MealRecipeCategory::all();
        $mealrecipesubcategory = MealRecipeSubCategory::findOrFail($id);

        return view('admin.meal-recipe-sub-category.edit', compact('mealrecipesubcategory', 'mealRecipeCategories'));
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
            'sub_category_name' => 'required',
            'description' => 'required',
            'approved' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        $mealrecipesubcategory = MealRecipeSubCategory::findOrFail($id);
        $mealrecipesubcategory->update($requestData);

        return redirect('admin/meal-recipe-sub-category')->with('flash_message', 'MealRecipeSubCategory updated!');
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
        MealRecipeSubCategory::destroy($id);

        return redirect('admin/meal-recipe-sub-category')->with('flash_message', 'MealRecipeSubCategory deleted!');
    }
}
