<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredient;
use App\Models\MealMeasurements;
use App\Models\MealIngredientCategory;
use App\Util\FileUploadUtil;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealIngredientController extends Controller
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
            $mealingredient = MealIngredient::where('name', 'LIKE', "%$keyword%")
                ->orWhere('also_known', 'LIKE', "%$keyword%")
                ->orWhere('storage', 'LIKE', "%$keyword%")
                ->orWhere('shelf_life', 'LIKE', "%$keyword%")
                ->orWhere('is_healthy', 'LIKE', "%$keyword%")
                ->orWhere('parameter', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('directly_edible', 'LIKE', "%$keyword%")
                ->orWhere('images', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('thumb_image', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('calories', 'LIKE', "%$keyword%")
                ->orWhere('carbs', 'LIKE', "%$keyword%")
                ->orWhere('fats', 'LIKE', "%$keyword%")
                ->orWhere('protien', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('serving', 'LIKE', "%$keyword%")
                ->orWhere('food_group', 'LIKE', "%$keyword%")
                ->orWhere('per_gram_serving', 'LIKE', "%$keyword%")
                ->orWhere('fiber_in_gm', 'LIKE', "%$keyword%")
                ->orWhere('fiber_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('sodium_in_mg', 'LIKE', "%$keyword%")
                ->orWhere('sodium_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('potassium', 'LIKE', "%$keyword%")
                ->orWhere('cholesterol', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->orWhere('created_by', 'LIKE', "%$keyword%")
                ->orWhere('sugar', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('keyword', 'LIKE', "%$keyword%")
                ->orWhere('og_desc', 'LIKE', "%$keyword%")
                ->orWhere('og_title', 'LIKE', "%$keyword%")
                ->orWhere('facebook_img', 'LIKE', "%$keyword%")
                ->orWhere('twitter_img', 'LIKE', "%$keyword%")
                ->orWhere('tag1', 'LIKE', "%$keyword%")
                ->orWhere('image_title', 'LIKE', "%$keyword%")
                ->orWhere('meta_description', 'LIKE', "%$keyword%")
                ->orWhere('image_alt_tag', 'LIKE', "%$keyword%")
                ->orWhere('url_rewrite', 'LIKE', "%$keyword%")
                ->with('category')
                ->latest()->paginate($perPage);
        } else {
            $mealingredient = MealIngredient::with('category')->latest()->paginate($perPage);
        }

        return view('admin.meal-ingredient.index', compact('mealingredient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = MealIngredientCategory::all();
        $MealMeasurements = MealMeasurements::all();
        

        return view('admin.meal-ingredient.create', compact('categories','MealMeasurements'));
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
            'name' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['images'] = FileUploadUtil::uploadFileMultiple($request->file('images'));
        $requestData['image'] = FileUploadUtil::uploadFile($request->file('image'));
        $requestData['thumb_image'] = FileUploadUtil::uploadFile($request->file('thumb_image'));
        $requestData['facebook_img'] = FileUploadUtil::uploadFile($request->file('facebook_img'));
        $requestData['twitter_img'] = FileUploadUtil::uploadFile($request->file('twitter_img'));

        MealIngredient::create($requestData);

        return redirect('admin/meal-ingredient')->with('flash_message', 'MealIngredient added!');
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
        $mealingredient = MealIngredient::with('category')->findOrFail($id);

        return view('admin.meal-ingredient.show', compact('mealingredient'));
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
        $categories = MealIngredientCategory::all();
        $mealingredient = MealIngredient::findOrFail($id);
        $MealMeasurements = MealMeasurements::all();

        return view('admin.meal-ingredient.edit', compact('mealingredient', 'categories', 'MealMeasurements'));
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
            'name' => 'required'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        $requestData['images'] = FileUploadUtil::uploadFileMultiple($request->file('images'));
        $requestData['image'] = FileUploadUtil::uploadFile($request->file('image'));
        $requestData['thumb_image'] = FileUploadUtil::uploadFile($request->file('thumb_image'));
        $requestData['facebook_img'] = FileUploadUtil::uploadFile($request->file('facebook_img'));
        $requestData['twitter_img'] = FileUploadUtil::uploadFile($request->file('twitter_img'));

        $mealingredient = MealIngredient::findOrFail($id);
        $mealingredient->update($requestData);

        return redirect('admin/meal-ingredient')->with('flash_message', 'MealIngredient updated!');
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
        MealIngredient::destroy($id);

        return redirect('admin/meal-ingredient')->with('flash_message', 'MealIngredient deleted!');
    }
}
