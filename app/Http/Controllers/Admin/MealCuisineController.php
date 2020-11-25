<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealCuisine;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealCuisineController extends Controller
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
            $mealcuisine = MealCuisine::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealcuisine = MealCuisine::latest()->paginate($perPage);
        }

        return view('admin.meal-cuisine.index', compact('mealcuisine'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-cuisine.create');
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
        
        MealCuisine::create($requestData);

        return redirect('admin/meal-cuisine')->with('flash_message', 'MealCuisine added!');
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
        $mealcuisine = MealCuisine::findOrFail($id);

        return view('admin.meal-cuisine.show', compact('mealcuisine'));
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
        $mealcuisine = MealCuisine::findOrFail($id);

        return view('admin.meal-cuisine.edit', compact('mealcuisine'));
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
			'name' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        $mealcuisine = MealCuisine::findOrFail($id);
        $mealcuisine->update($requestData);

        return redirect('admin/meal-cuisine')->with('flash_message', 'MealCuisine updated!');
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
        MealCuisine::destroy($id);

        return redirect('admin/meal-cuisine')->with('flash_message', 'MealCuisine deleted!');
    }
}
