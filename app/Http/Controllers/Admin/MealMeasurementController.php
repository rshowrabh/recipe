<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealMeasurement;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealMeasurementController extends Controller
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
            $mealmeasurement = MealMeasurement::where('unit', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealmeasurement = MealMeasurement::latest()->paginate($perPage);
        }

        return view('admin.meal-measurement.index', compact('mealmeasurement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-measurement.create');
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
            'unit' => 'required|max:30|unique:meal_measurements'
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        MealMeasurement::create($requestData);

        return redirect('admin/meal-measurement')->with('flash_message', 'MealMeasurement added!');
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
        $mealmeasurement = MealMeasurement::findOrFail($id);

        return view('admin.meal-measurement.show', compact('mealmeasurement'));
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
        $mealmeasurement = MealMeasurement::findOrFail($id);

        return view('admin.meal-measurement.edit', compact('mealmeasurement'));
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
            'unit' => 'required|max:30|unique:meal_measurements,unit,' . $id
        ]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());

        $mealmeasurement = MealMeasurement::findOrFail($id);
        $mealmeasurement->update($requestData);

        return redirect('admin/meal-measurement')->with('flash_message', 'MealMeasurement updated!');
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
        MealMeasurement::destroy($id);

        return redirect('admin/meal-measurement')->with('flash_message', 'MealMeasurement deleted!');
    }
}
