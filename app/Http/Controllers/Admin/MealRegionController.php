<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealCuisine;
use App\Models\MealRegion;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealRegionController extends Controller
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
            $mealregion = MealRegion::where('cusine_id', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->with('mealCuisine')
                ->latest()->paginate($perPage);
        } else {
            $mealregion = MealRegion::with('mealCuisine')->latest()->paginate($perPage);
        }

        return view('admin.meal-region.index', compact('mealregion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $mealCuisines = MealCuisine::all();

        return view('admin.meal-region.create', compact('mealCuisines'));
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

        MealRegion::create($requestData);

        return redirect('admin/meal-region')->with('flash_message', 'MealRegion added!');
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
        $mealregion = MealRegion::with('mealCuisine')->findOrFail($id);

        return view('admin.meal-region.show', compact('mealregion'));
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
        $mealCuisines = MealCuisine::all();
        $mealregion = MealRegion::findOrFail($id);

        return view('admin.meal-region.edit', compact('mealregion', 'mealCuisines'));
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

        $mealregion = MealRegion::findOrFail($id);
        $mealregion->update($requestData);

        return redirect('admin/meal-region')->with('flash_message', 'MealRegion updated!');
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
        MealRegion::destroy($id);

        return redirect('admin/meal-region')->with('flash_message', 'MealRegion deleted!');
    }

    public function getRegion(Request $request){
        $data = MealRegion::where('cusine_id', $request->cusine_id)->pluck('name','id');
        return response()->json($data);
    }
}
