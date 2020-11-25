<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealIngredient;
use App\Models\MealVitaminMineral;
use App\Util\Helper;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Help;

class MealVitaminMineralController extends Controller
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
            $mealvitaminmineral = MealVitaminMineral::where('vitamin_a', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_b6', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_b12', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_c', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_d', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_d2', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_d3', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_e', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_k', 'LIKE', "%$keyword%")
                ->orWhere('calcium', 'LIKE', "%$keyword%")
                ->orWhere('iron', 'LIKE', "%$keyword%")
                ->orWhere('magnesium', 'LIKE', "%$keyword%")
                ->orWhere('phosphorus', 'LIKE', "%$keyword%")
                ->orWhere('zinc', 'LIKE', "%$keyword%")
                ->orWhere('copper', 'LIKE', "%$keyword%")
                ->orWhere('manganese', 'LIKE', "%$keyword%")
                ->orWhere('selenium', 'LIKE', "%$keyword%")
                ->orWhere('retinol', 'LIKE', "%$keyword%")
                ->orWhere('thiamine', 'LIKE', "%$keyword%")
                ->orWhere('riboflavin', 'LIKE', "%$keyword%")
                ->orWhere('niacin', 'LIKE', "%$keyword%")
                ->orWhere('folate', 'LIKE', "%$keyword%")
                ->orWhere('choline', 'LIKE', "%$keyword%")
                ->orWhere('betaine', 'LIKE', "%$keyword%")
                ->orWhere('caffeine', 'LIKE', "%$keyword%")
                ->orWhere('lycopene', 'LIKE', "%$keyword%")
                ->orWhere('fluoride', 'LIKE', "%$keyword%")
                ->orWhere('water', 'LIKE', "%$keyword%")
                ->orWhere('calcium_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('choline_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('copper_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('folate_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('iron_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('magnesium_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('manganese_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('niacin_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('phosphorus_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('riboflavin_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('thiamine_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('selenium_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_a_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_b6_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_b12_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_c_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_d_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_e_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('vitamin_k_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('zinc_in_percent', 'LIKE', "%$keyword%")
                ->orWhere('ingredent_id', 'LIKE', "%$keyword%")
                ->with('ingredient')
                ->latest()->paginate($perPage);
        } else {
            $mealvitaminmineral = MealVitaminMineral::with('ingredient')->latest()->paginate($perPage);
        }

        return view('admin.meal-vitamin-mineral.index', compact('mealvitaminmineral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $ingredients = MealIngredient::all();

        return view('admin.meal-vitamin-mineral.create', compact('ingredients'));
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

        MealVitaminMineral::create($requestData);

        return redirect('admin/meal-vitamin-mineral')->with('flash_message', 'MealVitaminMineral added!');
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
        $mealvitaminmineral = MealVitaminMineral::with('ingredient')->findOrFail($id);

        return view('admin.meal-vitamin-mineral.show', compact('mealvitaminmineral'));
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
        $mealvitaminmineral = MealVitaminMineral::findOrFail($id);

        return view('admin.meal-vitamin-mineral.edit', compact('mealvitaminmineral', 'ingredients'));
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

        $mealvitaminmineral = MealVitaminMineral::findOrFail($id);
        $mealvitaminmineral->update($requestData);

        return redirect('admin/meal-vitamin-mineral')->with('flash_message', 'MealVitaminMineral updated!');
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
        MealVitaminMineral::destroy($id);

        return redirect('admin/meal-vitamin-mineral')->with('flash_message', 'MealVitaminMineral deleted!');
    }
}
