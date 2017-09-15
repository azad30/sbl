<?php

namespace App\Http\Controllers\ItemInfo;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ItemInfo;
use App\ItemUnit;
use App\ItemCategory;

use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use Session;

class ItemInfosController extends Controller
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
            $iteminfos = ItemInfo::where('barcode', 'LIKE', "%$keyword%")
				->orWhere('customer_code', 'LIKE', "%$keyword%")
				->orWhere('item_name', 'LIKE', "%$keyword%")
				->orWhere('item_category_id', 'LIKE', "%$keyword%")
				->orWhere('item_category_unit', 'LIKE', "%$keyword%")
				->orWhere('item_type', 'LIKE', "%$keyword%")
				->orWhere('item_qty', 'LIKE', "%$keyword%")
				->orWhere('item_price', 'LIKE', "%$keyword%")
				->orWhere('discount_percent', 'LIKE', "%$keyword%")
				->orWhere('discount_tk', 'LIKE', "%$keyword%")
				->orWhere('vat', 'LIKE', "%$keyword%")
				->orWhere('created_by', 'LIKE', "%$keyword%")
				->orWhere('updated_by', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $iteminfos = ItemInfo::paginate($perPage);
        }

        return view('item-infos.index', compact('iteminfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $itemcategories = ItemCategory::pluck('item_category_name','id');
        $itemunits = ItemUnit::pluck('unit_name','id');
        return view('item-infos.create', compact('itemcategories','itemunits'));
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
        
        // $requestData = $request->all();
        
        // ItemInfo::create($requestData);

           $this->validate($request, [
                'barcode'           => 'required', 
                'item_name'         => 'required', 
                'item_category_id'  => 'required',
                'item_unit'         => 'required',  
                'item_type'         => 'required',
                'item_qty'          => 'required', 
                'item_price'        => 'required',
                'discount_percent'  => 'required',
                'discount_tk'       => 'required',
                'vat'               => 'required', 
                'created_by'        => 'required',
                'updated_by'        => 'required'    
                ]);


                    ItemInfo::create([
                        'barcode'           => $request->barcode, 
                        'item_name'         => $request->item_name, 
                        'item_category_id'  => $request->item_category_id,
                        'item_unit'         => $request->item_unit,  
                        'item_type'         => $request->item_type,
                        'item_qty'          => $request->item_qty, 
                        'item_price'        => $request->item_price,
                        'discount_percent'  => $request->discount_percent,
                        'discount_tk'       => $request->discount_tk,
                        'vat'               => $request->vat, 
                        'created_by'        => $request->created_by,
                        'updated_by'        => $request->updated_by   
                    ]);


        Session::flash('flash_message', 'ItemInfo added!');

        return redirect('iteminfos/item-infos');
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
        $iteminfo = ItemInfo::findOrFail($id);

        return view('item-infos.show', compact('iteminfo'));
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
        $iteminfo = ItemInfo::findOrFail($id);
        $itemcategories = ItemCategory::pluck('item_category_name','id');
        $itemunits = ItemUnit::pluck('unit_name','id');

        return view('item-infos.edit', compact('iteminfo','itemcategories','itemunits'));
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
        
        // $requestData = $request->all();
        
        // $iteminfo = ItemInfo::findOrFail($id);
        // $iteminfo->update($requestData);

           $this->validate($request, [
                'barcode'           => 'required', 
                'item_name'         => 'required', 
                'item_category_id'  => 'required',
                'item_unit'         => 'required',  
                'item_type'         => 'required',
                'item_qty'          => 'required', 
                'item_price'        => 'required',
                'discount_percent'  => 'required',
                'discount_tk'       => 'required',
                'vat'               => 'required', 
                'created_by'        => 'required',
                'updated_by'        => 'required'  
                ]);
        


        $branch = ItemInfo::findOrFail($id);

        $branch->update([
                'barcode'           => $request->barcode, 
                'item_name'         => $request->item_name, 
                'item_category_id'  => $request->item_category_id,
                'item_unit'         => $request->item_unit,  
                'item_type'         => $request->item_type,
                'item_qty'          => $request->item_qty, 
                'item_price'        => $request->item_price,
                'discount_percent'  => $request->discount_percent,
                'discount_tk'       => $request->discount_tk,
                'vat'               => $request->vat, 
                'created_by'        => $request->created_by,
                'updated_by'        => $request->updated_by   
        ]);


        Session::flash('flash_message', 'ItemInfo updated!');

        return redirect('iteminfos/item-infos');
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
        ItemInfo::destroy($id);

        Session::flash('flash_message', 'ItemInfo deleted!');

        return redirect('iteminfos/item-infos');
    }
}
