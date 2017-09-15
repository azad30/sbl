<?php

namespace App\Http\Controllers\ItemUnit;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ItemUnit;
use Illuminate\Http\Request;
use Session;

class ItemUnitController extends Controller
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
            $itemunit = ItemUnit::where('unit_name', 'LIKE', "%$keyword%")
				->orWhere('created_by', 'LIKE', "%$keyword%")
				->orWhere('updated_by', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $itemunit = ItemUnit::paginate($perPage);
        }

        return view('item-unit.index', compact('itemunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('item-unit.create');
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
        
        ItemUnit::create($requestData);

        Session::flash('flash_message', 'ItemUnit added!');

        return redirect('itemunits/item-unit');
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
        $itemunit = ItemUnit::findOrFail($id);

        return view('item-unit.show', compact('itemunit'));
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
        $itemunit = ItemUnit::findOrFail($id);

        return view('item-unit.edit', compact('itemunit'));
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
        
        $itemunit = ItemUnit::findOrFail($id);
        $itemunit->update($requestData);

        Session::flash('flash_message', 'ItemUnit updated!');

        return redirect('itemunits/item-unit');
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
        ItemUnit::destroy($id);

        Session::flash('flash_message', 'ItemUnit deleted!');

        return redirect('itemunits/item-unit');
    }
}
