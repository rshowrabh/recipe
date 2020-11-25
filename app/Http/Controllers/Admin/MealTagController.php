<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MealTag;
use App\Util\Helper;
use Illuminate\Http\Request;

class MealTagController extends Controller
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
            $mealtag = MealTag::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->orWhere('approved', 'LIKE', "%$keyword%")
                ->orWhere('color_code', 'LIKE', "%$keyword%")
                ->orWhere('meal_tag_categories_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $mealtag = MealTag::latest()->paginate($perPage);
        }

        return view('admin.meal-tag.index', compact('mealtag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.meal-tag.create');
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
        
        MealTag::create($requestData);

        return redirect('admin/meal-tag')->with('flash_message', 'MealTag added!');
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
        $mealtag = MealTag::findOrFail($id);

        return view('admin.meal-tag.show', compact('mealtag'));
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
        $mealtag = MealTag::findOrFail($id);

        return view('admin.meal-tag.edit', compact('mealtag'));
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
        
        $requestData = Helper::fillArrayWithEmptyStringWhenNull($request->all());
        
        $mealtag = MealTag::findOrFail($id);
        $mealtag->update($requestData);

        return redirect('admin/meal-tag')->with('flash_message', 'MealTag updated!');
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
        MealTag::destroy($id);

        return redirect('admin/meal-tag')->with('flash_message', 'MealTag deleted!');
    }
}
