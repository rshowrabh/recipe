<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealPrimaryDietType;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealPrimaryDietTypeController extends Controller
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
            $mealprimarydiettype = MealPrimaryDietType::where('name', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealprimarydiettype = MealPrimaryDietType::latest()->paginate($perPage);
        }

        return view('admin.meal-primary-diet-type.index', compact('mealprimarydiettype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-primary-diet-type.create');
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
        
        MealPrimaryDietType::create($requestData);

        return redirect('admin/meal-primary-diet-type')->with('flash_message', 'MealPrimaryDietType added!');
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
        $mealprimarydiettype = MealPrimaryDietType::findOrFail($id);

        return view('admin.meal-primary-diet-type.show', compact('mealprimarydiettype'));
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
        $mealprimarydiettype = MealPrimaryDietType::findOrFail($id);

        return view('admin.meal-primary-diet-type.edit', compact('mealprimarydiettype'));
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
        
        $mealprimarydiettype = MealPrimaryDietType::findOrFail($id);
        $mealprimarydiettype->update($requestData);

        return redirect('admin/meal-primary-diet-type')->with('flash_message', 'MealPrimaryDietType updated!');
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
        MealPrimaryDietType::destroy($id);

        return redirect('admin/meal-primary-diet-type')->with('flash_message', 'MealPrimaryDietType deleted!');
    }
}
