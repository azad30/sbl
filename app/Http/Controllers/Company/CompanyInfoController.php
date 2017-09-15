<?php

namespace App\Http\Controllers\Company;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CompanyInfo;
use Illuminate\Http\Request;

use File;
use Carbon\Carbon;
use Session;

class CompanyInfoController extends Controller
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
            $companyinfo = CompanyInfo::where('company_name', 'LIKE', "%$keyword%")
				->orWhere('company_type', 'LIKE', "%$keyword%")
				->orWhere('mobile', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('address', 'LIKE', "%$keyword%")
				->orWhere('country', 'LIKE', "%$keyword%")
				->orWhere('telephone', 'LIKE', "%$keyword%")
				->orWhere('website', 'LIKE', "%$keyword%")
				->orWhere('primary_company_ac_no', 'LIKE', "%$keyword%")
				->orWhere('bank_name', 'LIKE', "%$keyword%")
				->orWhere('branch_name', 'LIKE', "%$keyword%")
				->orWhere('company_sub_ac_no', 'LIKE', "%$keyword%")
				->orWhere('company_license_no', 'LIKE', "%$keyword%")
				->orWhere('company_description', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				->orWhere('created_by', 'LIKE', "%$keyword%")
				->orWhere('updated_by', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $companyinfo = CompanyInfo::paginate($perPage);
        }

        return view('company-info.index', compact('companyinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('company-info.create');
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
            'company_name'          => 'required', 
            'company_type'          => 'required', 
            'mobile'                => 'required', 
            'email'                 => 'required',
            'address'               => 'required',  
            'country'               => 'required',
            'telephone'             => 'required', 
            'website'               => 'required',
            'primary_company_ac_no' => 'required',
            'bank_name'             => 'required',
            'branch_name'           => 'required',
            'company_sub_ac_no'     => 'required', 
            'company_license_no'    => 'required',
            'company_description'   => 'required', 
            'image'                 => 'required',
            'created_by'            => 'required', 
            'updated_by'            => 'required',    
            ]);


        $file               = $request->image;
        $destinationPath    = 'uploads/company_images';
        $filename           = $file->getClientOriginalName();
        $dateTime           = Carbon::now()->format('Y_m_d_H_i_s_A');
        $full_name          = $dateTime.'__'.$filename;

        $upload_success     = $file->move($destinationPath, $full_name);



        CompanyInfo::create([
            // 'company_id'            =>1,
            'company_name'          => $request->company_name,
            'company_type'          => $request->company_type,
            'mobile'                => $request->mobile,
            'email'                 => $request->email,
            'address'               => $request->address,
            'country'               => $request->country,
            'telephone'             => $request->telephone, 
            'website'               => $request->website,
            'primary_company_ac_no' => $request->primary_company_ac_no,
            'bank_name'             => $request->bank_name,
            'branch_name'           => $request->branch_name,
            'company_sub_ac_no'     => $request->company_sub_ac_no, 
            'company_license_no'    => $request->company_license_no,
            'company_description'   => $request->company_description, 
            'image'                 => $full_name,
            'created_by'            => $request->created_by,
            'updated_by'            => $request->updated_by,
        ]);


        Session::flash('flash_message', 'CompanyInfo added!');

        return redirect('companies/company-info');
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
        $companyinfo = CompanyInfo::findOrFail($id);

        return view('company-info.show', compact('companyinfo'));
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
        $companyinfo = CompanyInfo::findOrFail($id);

        return view('company-info.edit', compact('companyinfo'));
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
        
        // $companyinfo = CompanyInfo::findOrFail($id);
        // $companyinfo->update($requestData);

        $this->validate($request, [
            'company_name'          => 'required', 
            'company_type'          => 'required', 
            'mobile'                => 'required', 
            'email'                 => 'required',
            'address'               => 'required',  
            'country'               => 'required',
            'telephone'             => 'required', 
            'website'               => 'required',
            'primary_company_ac_no' => 'required',
            'bank_name'             => 'required',
            'branch_name'           => 'required',
            'company_sub_ac_no'     => 'required', 
            'company_license_no'    => 'required',
            'company_description'   => 'required', 
            'image'                 => 'required',
            'created_by'            => 'required', 
            'updated_by'            => 'required',    
            ]);



        $company = CompanyInfo::findOrFail($id);
        if ($request->file('image')){
            $file = $request->image;
            $destinationPath = 'uploads/company_images';
            $filename = $file->getClientOriginalName();
            $dateTime = Carbon::now()->format('Y_m_d_H_i_s_A');
            $full_name = $dateTime.'__'.$filename;
            $upload_success = $file->move($destinationPath, $full_name);
            $request->merge(['image' => $filename ]);
            unlink($destinationPath.'\\'.$company->image);

        }

        $company->update([
           // 'company_id'            => 1,
            'company_name'          => $request->company_name,
            'company_type'          => $request->company_type,
            'mobile'                => $request->mobile,
            'email'                 => $request->email,
            'address'               => $request->address,
            'country'               => $request->country,
            'telephone'             => $request->telephone, 
            'website'               => $request->website,
            'primary_company_ac_no' => $request->primary_company_ac_no,
            'bank_name'             => $request->bank_name,
            'branch_name'           => $request->branch_name,
            'company_sub_ac_no'     => $request->company_sub_ac_no, 
            'company_license_no'    => $request->company_license_no,
            'company_description'   => $request->company_description, 
            'image'                 => $full_name,
            'created_by'            => $request->created_by,
            'updated_by'            => $request->updated_by,
        ]);

        Session::flash('flash_message', 'CompanyInfo updated!');

        return redirect('companies/company-info');
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
        CompanyInfo::destroy($id);

        Session::flash('flash_message', 'CompanyInfo deleted!');

        return redirect('companies/company-info');
    }
}
