<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealDishType;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealDishTypeController extends Controller
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
            $mealdishtype = MealDishType::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealdishtype = MealDishType::latest()->paginate($perPage);
        }

        return view('admin.meal-dish-type.index', compact('mealdishtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-dish-type.create');
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
			'description' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        MealDishType::create($requestData);

        return redirect('admin/meal-dish-type')->with('flash_message', 'MealDishType added!');
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
        $mealdishtype = MealDishType::findOrFail($id);

        return view('admin.meal-dish-type.show', compact('mealdishtype'));
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
        $mealdishtype = MealDishType::findOrFail($id);

        return view('admin.meal-dish-type.edit', compact('mealdishtype'));
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
			'description' => 'required'
		]);
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        $mealdishtype = MealDishType::findOrFail($id);
        $mealdishtype->update($requestData);

        return redirect('admin/meal-dish-type')->with('flash_message', 'MealDishType updated!');
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
        MealDishType::destroy($id);

        return redirect('admin/meal-dish-type')->with('flash_message', 'MealDishType deleted!');
    }
}
