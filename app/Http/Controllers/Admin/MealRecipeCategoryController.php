<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealRecipeCategory;
use App\Util\FileUploadUtil;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRecipeCategoryController extends Controller
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
            $mealrecipecategory = MealRecipeCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealrecipecategory = MealRecipeCategory::latest()->paginate($perPage);
        }

        return view('admin.meal-recipe-category.index', compact('mealrecipecategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-recipe-category.create');
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
            'slug' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['icon'] = FileUploadUtil::uploadFile($request->file('icon'));

        MealRecipeCategory::create($requestData);

        return redirect('admin/meal-recipe-category')->with('flash_message', 'MealRecipeCategory added!');
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
        $mealrecipecategory = MealRecipeCategory::findOrFail($id);

        return view('admin.meal-recipe-category.show', compact('mealrecipecategory'));
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
        $mealrecipecategory = MealRecipeCategory::findOrFail($id);

        return view('admin.meal-recipe-category.edit', compact('mealrecipecategory'));
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
            'slug' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['icon'] = FileUploadUtil::uploadFile($request->file('icon'));

        $mealrecipecategory = MealRecipeCategory::findOrFail($id);
        $mealrecipecategory->update($requestData);

        return redirect('admin/meal-recipe-category')->with('flash_message', 'MealRecipeCategory updated!');
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
        MealRecipeCategory::destroy($id);

        return redirect('admin/meal-recipe-category')->with('flash_message', 'MealRecipeCategory deleted!');
    }
}
