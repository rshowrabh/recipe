<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredient;
use App\Models\MealSugar;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealSugarController extends Controller
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
            $mealsugar = MealSugar::where('ingredent_id', 'LIKE', "%$keyword%")
                ->orWhere('sugar', 'LIKE', "%$keyword%")
                ->orWhere('sucrose', 'LIKE', "%$keyword%")
                ->orWhere('glucose', 'LIKE', "%$keyword%")
                ->orWhere('fructose', 'LIKE', "%$keyword%")
                ->orWhere('lactose', 'LIKE', "%$keyword%")
                ->orWhere('maltose', 'LIKE', "%$keyword%")
                ->orWhere('glactose', 'LIKE', "%$keyword%")
                ->with('ingredient')
                ->latest()->paginate($perPage);
        } else {
            $mealsugar = MealSugar::with('ingredient')->latest()->paginate($perPage);
        }

        return view('admin.meal-sugar.index', compact('mealsugar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ingredients = MealIngredient::all();

        return view('admin.meal-sugar.create', compact('ingredients'));
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

        MealSugar::create($requestData);

        return redirect('admin/meal-sugar')->with('flash_message', 'MealSugar added!');
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
        $mealsugar = MealSugar::with('ingredient')->findOrFail($id);

        return view('admin.meal-sugar.show', compact('mealsugar'));
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
        $mealsugar = MealSugar::findOrFail($id);

        return view('admin.meal-sugar.edit', compact('mealsugar', 'ingredients'));
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

        $mealsugar = MealSugar::findOrFail($id);
        $mealsugar->update($requestData);

        return redirect('admin/meal-sugar')->with('flash_message', 'MealSugar updated!');
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
        MealSugar::destroy($id);

        return redirect('admin/meal-sugar')->with('flash_message', 'MealSugar deleted!');
    }
}
