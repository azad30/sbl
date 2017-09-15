<?php

namespace App\Http\Controllers\SalesMaster;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SalesMaster;
use Illuminate\Http\Request;
use Session;

class SalesMasterController extends Controller
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
            $salesmaster = SalesMaster::where('cu_id', 'LIKE', "%$keyword%")
				->orWhere('branch_id', 'LIKE', "%$keyword%")
				->orWhere('pay_method', 'LIKE', "%$keyword%")
				->orWhere('grand_total', 'LIKE', "%$keyword%")
				->orWhere('discount', 'LIKE', "%$keyword%")
				->orWhere('net_pay', 'LIKE', "%$keyword%")
				->orWhere('due', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $salesmaster = SalesMaster::paginate($perPage);
        }

        return view('sales-master.index', compact('salesmaster'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('sales-master.create');
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
        
        SalesMaster::create($requestData);

        Session::flash('flash_message', 'SalesMaster added!');

        return redirect('salesmasters/sales-master');
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
        $salesmaster = SalesMaster::findOrFail($id);

        return view('sales-master.show', compact('salesmaster'));
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
        $salesmaster = SalesMaster::findOrFail($id);

        return view('sales-master.edit', compact('salesmaster'));
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
        
        $salesmaster = SalesMaster::findOrFail($id);
        $salesmaster->update($requestData);

        Session::flash('flash_message', 'SalesMaster updated!');

        return redirect('salesmasters/sales-master');
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
        SalesMaster::destroy($id);

        Session::flash('flash_message', 'SalesMaster deleted!');

        return redirect('salesmasters/sales-master');
    }
}
