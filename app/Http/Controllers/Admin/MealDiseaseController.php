<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealDisease;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealDiseaseController extends Controller
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
            $mealdisease = MealDisease::where('name', 'LIKE', "%$keyword%")
                ->orWhere('symptoms', 'LIKE', "%$keyword%")
                ->orWhere('food_to_eaten', 'LIKE', "%$keyword%")
                ->orWhere('food_to_avoid', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealdisease = MealDisease::latest()->paginate($perPage);
        }

        return view('admin.meal-disease.index', compact('mealdisease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-disease.create');
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
			'symptoms' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        MealDisease::create($requestData);

        return redirect('admin/meal-disease')->with('flash_message', 'MealDisease added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $mealdisease = MealDisease::findOrFail($id);

        return view('admin.meal-disease.show', compact('mealdisease'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $mealdisease = MealDisease::findOrFail($id);

        return view('admin.meal-disease.edit', compact('mealdisease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
			'symptoms' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        $mealdisease = MealDisease::findOrFail($id);
        $mealdisease->update($requestData);

        return redirect('admin/meal-disease')->with('flash_message', 'MealDisease updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        MealDisease::destroy($id);

        return redirect('admin/meal-disease')->with('flash_message', 'MealDisease deleted!');
    }
}
