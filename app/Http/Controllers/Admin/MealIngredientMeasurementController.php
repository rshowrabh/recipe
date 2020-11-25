<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredient;
use App\Models\MealIngredientMeasurement;
use App\Models\MealMeasurement;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealIngredientMeasurementController extends Controller
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
            $mealingredientmeasurement = MealIngredientMeasurement::where('ingredent_id', 'LIKE', "%$keyword%")
                ->orWhere('measurement_id', 'LIKE', "%$keyword%")
                ->orWhere('measure', 'LIKE', "%$keyword%")
                ->with('ingredient', 'measurement')
                ->latest()->paginate($perPage);
        } else {
            $mealingredientmeasurement = MealIngredientMeasurement::latest()->paginate($perPage);
        }

        return view('admin.meal-ingredient-measurement.index', compact('mealingredientmeasurement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ingredients = MealIngredient::all();
        $measurements = MealMeasurement::all();

        return view('admin.meal-ingredient-measurement.create', compact('ingredients', 'measurements'));
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

        MealIngredientMeasurement::create($requestData);

        return redirect('admin/meal-ingredient-measurement')->with('flash_message', 'MealIngredientMeasurement added!');
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
        $mealingredientmeasurement = MealIngredientMeasurement::with('ingredient', 'measurement')->findOrFail($id);

        return view('admin.meal-ingredient-measurement.show', compact('mealingredientmeasurement'));
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
        $measurements = MealMeasurement::all();
        $mealingredientmeasurement = MealIngredientMeasurement::findOrFail($id);

        return view('admin.meal-ingredient-measurement.edit', compact('mealingredientmeasurement', 'ingredients', 'measurements'));
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

        $mealingredientmeasurement = MealIngredientMeasurement::findOrFail($id);
        $mealingredientmeasurement->update($requestData);

        return redirect('admin/meal-ingredient-measurement')->with('flash_message', 'MealIngredientMeasurement updated!');
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
        MealIngredientMeasurement::destroy($id);

        return redirect('admin/meal-ingredient-measurement')->with('flash_message', 'MealIngredientMeasurement deleted!');
    }
}
