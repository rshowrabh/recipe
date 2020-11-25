<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealFat;
use App\Models\MealIngredient;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealFatController extends Controller
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
            $mealfat = MealFat::where('ingredent_id', 'LIKE', "%$keyword%")
                ->orWhere('saturated_fat', 'LIKE', "%$keyword%")
                ->orWhere('mono_unsaturated_fat', 'LIKE', "%$keyword%")
                ->orWhere('poly_unsaturated_fat', 'LIKE', "%$keyword%")
                ->orWhere('trans_fat', 'LIKE', "%$keyword%")
                ->orWhere('omega_3_fatty_acid', 'LIKE', "%$keyword%")
                ->orWhere('omega_6_fatty_acid', 'LIKE', "%$keyword%")
                ->with('ingredient')
                ->latest()->paginate($perPage);
        } else {
            $mealfat = MealFat::with('ingredient')->latest()->paginate($perPage);
        }

        return view('admin.meal-fat.index', compact('mealfat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ingredients = MealIngredient::all();

        return view('admin.meal-fat.create', compact('ingredients'));
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

        MealFat::create($requestData);

        return redirect('admin/meal-fat')->with('flash_message', 'MealFat added!');
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
        $mealfat = MealFat::with('ingredient')->findOrFail($id);

        return view('admin.meal-fat.show', compact('mealfat'));
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
        $mealfat = MealFat::findOrFail($id);

        return view('admin.meal-fat.edit', compact('mealfat', 'ingredients'));
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

        $mealfat = MealFat::findOrFail($id);
        $mealfat->update($requestData);

        return redirect('admin/meal-fat')->with('flash_message', 'MealFat updated!');
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
        MealFat::destroy($id);

        return redirect('admin/meal-fat')->with('flash_message', 'MealFat deleted!');
    }
}
