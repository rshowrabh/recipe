<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealRecipeSubCategory;
use App\Models\MealRecipeSubSubCategory;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeSubSubCategoryController extends Controller
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
            $mealrecipesubsubcategory = MealRecipeSubSubCategory::where('recipe_sub_category_id', 'LIKE', "%$keyword%")
                ->orWhere('sub_sub_category_name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->with('mealRecipeSubCategory')
                ->latest()->paginate($perPage);
        } else {
            $mealrecipesubsubcategory = MealRecipeSubSubCategory::with('mealRecipeSubCategory')->latest()->paginate($perPage);
        }

        return view('admin.meal-recipe-sub-sub-category.index', compact('mealrecipesubsubcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $mealRecipeSubCategories = MealRecipeSubCategory::all();

        return view('admin.meal-recipe-sub-sub-category.create', compact('mealRecipeSubCategories'));
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
            'sub_sub_category_name' => 'required',
            'description' => 'required',
            'approved' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        MealRecipeSubSubCategory::create($requestData);

        return redirect('admin/meal-recipe-sub-sub-category')->with('flash_message', 'MealRecipeSubSubCategory added!');
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
        $mealrecipesubsubcategory = MealRecipeSubSubCategory::with('mealRecipeSubCategory')->findOrFail($id);

        return view('admin.meal-recipe-sub-sub-category.show', compact('mealrecipesubsubcategory'));
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
        $mealRecipeSubCategories = MealRecipeSubCategory::all();
        $mealrecipesubsubcategory = MealRecipeSubSubCategory::findOrFail($id);

        return view('admin.meal-recipe-sub-sub-category.edit', compact('mealrecipesubsubcategory', 'mealRecipeSubCategories'));
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
            'sub_sub_category_name' => 'required',
            'description' => 'required',
            'approved' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        $mealrecipesubsubcategory = MealRecipeSubSubCategory::findOrFail($id);
        $mealrecipesubsubcategory->update($requestData);

        return redirect('admin/meal-recipe-sub-sub-category')->with('flash_message', 'MealRecipeSubSubCategory updated!');
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
        MealRecipeSubSubCategory::destroy($id);

        return redirect('admin/meal-recipe-sub-sub-category')->with('flash_message', 'MealRecipeSubSubCategory deleted!');
    }

    public function getSubCategory(Request $request){
        $subCat =   MealRecipeSubCategory::where('main_category_id', $request->category_id)->pluck('sub_category_name', 'id');
        return response()->json($subCat);
    }
    public function getSubSubCategory(Request $request){
        $subCat =   MealRecipeSubSubCategory::where('recipe_sub_category_id', $request->sub_category_id)->pluck('sub_sub_category_name', 'id');
        return response()->json($subCat);
    }
}
