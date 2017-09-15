<?php

namespace App\Http\Controllers\ItemCategory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ItemCategory;
use Illuminate\Http\Request;
use Session;

class ItemCategoryController extends Controller
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
            $itemcategory = ItemCategory::where('item_category_name', 'LIKE', "%$keyword%")
				->orWhere('created_by', 'LIKE', "%$keyword%")
				->orWhere('updated_by', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $itemcategory = ItemCategory::paginate($perPage);
        }

        return view('item-category.index', compact('itemcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('item-category.create');
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
        
        $requestData = $request->all();
        
        ItemCategory::create($requestData);

        Session::flash('flash_message', 'ItemCategory added!');

        return redirect('itemcategories/item-category');
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
        $itemcategory = ItemCategory::findOrFail($id);

        return view('item-category.show', compact('itemcategory'));
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
        $itemcategory = ItemCategory::findOrFail($id);

        return view('item-category.edit', compact('itemcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $itemcategory = ItemCategory::findOrFail($id);
        $itemcategory->update($requestData);

        Session::flash('flash_message', 'ItemCategory updated!');

        return redirect('itemcategories/item-category');
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
        ItemCategory::destroy($id);

        Session::flash('flash_message', 'ItemCategory deleted!');

        return redirect('itemcategories/item-category');
    }
}
