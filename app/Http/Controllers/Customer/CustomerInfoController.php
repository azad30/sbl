<?php

namespace App\Http\Controllers\Customer;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CustomerInfo;
use App\BranchInfo;
use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use Session;

class CustomerInfoController extends Controller
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
            $customerinfo = CustomerInfo::where('branch_name', 'LIKE', "%$keyword%")
				->orWhere('cu_type', 'LIKE', "%$keyword%")
				->orWhere('customer_code', 'LIKE', "%$keyword%")
				->orWhere('cu_name', 'LIKE', "%$keyword%")
				->orWhere('cu_mobile', 'LIKE', "%$keyword%")
				->orWhere('cu_email', 'LIKE', "%$keyword%")
				->orWhere('cu_address', 'LIKE', "%$keyword%")
				->orWhere('cu_country', 'LIKE', "%$keyword%")
				->orWhere('cu_telephone', 'LIKE', "%$keyword%")
				->orWhere('cu_ac_no', 'LIKE', "%$keyword%")
				->orWhere('cu_credit_limit', 'LIKE', "%$keyword%")
				->orWhere('cu_discount_rate_p', 'LIKE', "%$keyword%")
				->orWhere('cu_discount_rate_d', 'LIKE', "%$keyword%")
				->orWhere('cu_discount_rate_o', 'LIKE', "%$keyword%")
				->orWhere('cu_discount_rate_g', 'LIKE', "%$keyword%")
				->orWhere('cu_ac_no', 'LIKE', "%$keyword%")
				->orWhere('cu_bank_name', 'LIKE', "%$keyword%")
				->orWhere('cu_bank_branch_name', 'LIKE', "%$keyword%")
				->orWhere('cu_description', 'LIKE', "%$keyword%")
				->orWhere('reference_name', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('status', 'LIKE', "%$keyword%")
				->orWhere('created_by', 'LIKE', "%$keyword%")
				->orWhere('updated_by', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $customerinfo = CustomerInfo::paginate($perPage);
        }

        return view('customer-info.index', compact('customerinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $branches = BranchInfo::pluck('branch_name','id');
        return view('customer-info.create', compact('branches'));
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
        
        // CustomerInfo::create($requestData);


        $this->validate($request, [
            'branch_name'          => 'required', 
            'cu_type'              => 'required', 
            'customer_code'        => 'required', 
            'cu_name'              => 'required',
            'cu_email'             => 'required',  
            'cu_address'           => 'required',
            'cu_country'           => 'required', 
            'cu_mobile'            => 'required',
            'cu_telephone'         => 'required',
            'cu_credit_limit'      => 'required',
            'cu_discount_rate_p'   => 'required',
            'cu_discount_rate_g'   => 'required', 
            'cu_discount_rate_d'   => 'required',
            'cu_discount_rate_o'   => 'required', 
            'cu_ac_no'             => 'required',
            'cu_bank_name'         => 'required',
            'cu_bank_branch_name'  => 'required', 
            'cu_description'       => 'required',
            'reference_name'       => 'required',
            'image'                => 'required', 
            'status'               => 'required',
            'created_by'           => 'required', 
            'updated_by'           => 'required',    
            ]);


        $file               = $request->image;
        $destinationPath    = 'uploads/customer_images';
        $filename           = $file->getClientOriginalName();
        $dateTime           = Carbon::now()->format('Y_m_d_H_i_s_A');
        $full_name          = $dateTime.'__'.$filename;

        $upload_success     = $file->move($destinationPath, $full_name);



        CustomerInfo::create([
            'branch_id'          => $request->branch_name, 
            'cu_type'              => $request->cu_type,
            'customer_code'        => $request->customer_code, 
            'cu_name'              => $request->cu_name,
            'cu_email'             => $request->cu_email,  
            'cu_address'           => $request->cu_address,
            'cu_country'           => $request->cu_country,
            'cu_mobile'            => $request->cu_mobile,
            'cu_telephone'         => $request->cu_telephone,
            'cu_credit_limit'      => $request->cu_credit_limit,
            'cu_discount_rate_p'   => $request->cu_discount_rate_p,
            'cu_discount_rate_g'   => $request->cu_discount_rate_g,
            'cu_discount_rate_d'   => $request->cu_discount_rate_d,
            'cu_discount_rate_o'   => $request->cu_discount_rate_o,
            'cu_ac_no'             => $request->cu_ac_no,
            'cu_bank_name'         => $request->cu_bank_name,
            'cu_bank_branch_name'  => $request->cu_bank_branch_name,
            'cu_description'       => $request->cu_description,
            'reference_name'       => $request->reference_name,
            'image'                => $full_name,
            'status'               => $request->status,
            'created_by'           => $request->created_by,
            'updated_by'           => $request->updated_by, 
        ]);


        Session::flash('flash_message', 'CustomerInfo added!');

        return redirect('costomers/customer-info');
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
        $customerinfo = CustomerInfo::findOrFail($id);

        return view('customer-info.show', compact('customerinfo'));
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
        $customerinfo = CustomerInfo::findOrFail($id);
        $branches = BranchInfo::pluck('branch_name','id');

        return view('customer-info.edit', compact('customerinfo','branches'));
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
        
        // $customerinfo = CustomerInfo::findOrFail($id);
        // $customerinfo->update($requestData);

         $this->validate($request, [
            'branch_name'          => 'required', 
            'cu_type'              => 'required', 
            'customer_code'        => 'required', 
            'cu_name'              => 'required',
            'cu_email'             => 'required',  
            'cu_address'           => 'required',
            'cu_country'           => 'required', 
            'cu_mobile'            => 'required',
            'cu_telephone'         => 'required',
            'cu_credit_limit'      => 'required',
            'cu_discount_rate_p'   => 'required',
            'cu_discount_rate_g'   => 'required', 
            'cu_discount_rate_d'   => 'required',
            'cu_discount_rate_o'   => 'required', 
            'cu_ac_no'             => 'required',
            'cu_bank_name'         => 'required',
            'cu_bank_branch_name'  => 'required', 
            'cu_description'       => 'required',
            'reference_name'       => 'required',
            'image'                => 'required', 
            'status'               => 'required',
            'created_by'           => 'required', 
            'updated_by'           => 'required'     
        ]);
        


        $customer = CustomerInfo::findOrFail($id);
        if ($request->file('image')){
            $file = $request->image;
            $destinationPath = 'uploads/customer_images';
            $filename = $file->getClientOriginalName();
            $dateTime = Carbon::now()->format('Y_m_d_H_i_s_A');
            $full_name = $dateTime.'__'.$filename;
            $upload_success = $file->move($destinationPath, $full_name);
            $request->merge(['image' => $filename ]);
            unlink($destinationPath.'\\'.$customer->image);

        }

        $customer->update([
            'branch_id'          => $request->branch_name, 
            'cu_type'              => $request->cu_type,
            'customer_code'        => $request->customer_code, 
            'cu_name'              => $request->cu_name,
            'cu_email'             => $request->cu_email,  
            'cu_address'           => $request->cu_address,
            'cu_country'           => $request->cu_country,
            'cu_mobile'            => $request->cu_mobile,
            'cu_telephone'         => $request->cu_telephone,
            'cu_credit_limit'      => $request->cu_credit_limit,
            'cu_discount_rate_p'   => $request->cu_discount_rate_p,
            'cu_discount_rate_g'   => $request->cu_discount_rate_g,
            'cu_discount_rate_d'   => $request->cu_discount_rate_d,
            'cu_discount_rate_o'   => $request->cu_discount_rate_o,
            'cu_ac_no'             => $request->cu_ac_no,
            'cu_bank_name'         => $request->cu_bank_name,
            'cu_bank_branch_name'  => $request->cu_bank_branch_name,
            'cu_description'       => $request->cu_description,
            'reference_name'       => $request->reference_name,
            'image'                => $full_name,
            'status'               => $request->status,
            'created_by'           => $request->created_by,
            'updated_by'           => $request->updated_by, 
        ]);

        Session::flash('flash_message', 'CustomerInfo updated!');

        return redirect('costomers/customer-info');
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
        CustomerInfo::destroy($id);

        Session::flash('flash_message', 'CustomerInfo deleted!');

        return redirect('costomers/customer-info');
    }
}
