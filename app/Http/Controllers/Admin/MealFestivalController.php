<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealFestival;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealFestivalController extends Controller
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
            $mealfestival = MealFestival::where('name', 'LIKE', "%$keyword%")
                ->orWhere('holiday', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('festival_date', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealfestival = MealFestival::latest()->paginate($perPage);
        }

        return view('admin.meal-festival.index', compact('mealfestival'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-festival.create');
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
			'holiday' => 'required',
			'festival_date' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        MealFestival::create($requestData);

        return redirect('admin/meal-festival')->with('flash_message', 'MealFestival added!');
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
        $mealfestival = MealFestival::findOrFail($id);

        return view('admin.meal-festival.show', compact('mealfestival'));
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
        $mealfestival = MealFestival::findOrFail($id);

        return view('admin.meal-festival.edit', compact('mealfestival'));
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
			'holiday' => 'required',
			'festival_date' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        $mealfestival = MealFestival::findOrFail($id);
        $mealfestival->update($requestData);

        return redirect('admin/meal-festival')->with('flash_message', 'MealFestival updated!');
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
        MealFestival::destroy($id);

        return redirect('admin/meal-festival')->with('flash_message', 'MealFestival deleted!');
    }
}
