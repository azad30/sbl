<?php

namespace App\Http\Controllers\Branch;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CompanyInfo;

use App\BranchInfo;
use Illuminate\Http\Request;
use Session;
use File;
use Carbon\Carbon;

class BranchInfoController extends Controller
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
            $branchinfo = BranchInfo::where('company_name', 'LIKE', "%$keyword%")
				->orWhere('branch_name', 'LIKE', "%$keyword%")
				->orWhere('branch_type', 'LIKE', "%$keyword%")
				->orWhere('mobile', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('address', 'LIKE', "%$keyword%")
				->orWhere('country', 'LIKE', "%$keyword%")
				->orWhere('telephone', 'LIKE', "%$keyword%")
				->orWhere('website', 'LIKE', "%$keyword%")
				->orWhere('branch_ac_no', 'LIKE', "%$keyword%")
				->orWhere('branch_sub_ac_no', 'LIKE', "%$keyword%")
				->orWhere('branch_license_no', 'LIKE', "%$keyword%")
				->orWhere('branch_description', 'LIKE', "%$keyword%")
				->orWhere('image', 'LIKE', "%$keyword%")
				
                ->paginate($perPage);
        } else {
            $branchinfo = BranchInfo::paginate($perPage);
        }

        return view('branch-info.index', compact('branchinfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $companies = CompanyInfo::pluck('company_name','id');
        return view('branch-info.create', compact('companies'));
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
        
        // BranchInfo::create($requestData);

       // $company_id = $request->branch_id;
       // dd($company_id);

           $this->validate($request, [
                'branch_name'           => 'required', 
                'branch_type'           => 'required', 
                'b_mobile'              => 'required',
                'b_email'               => 'required',  
                'b_address'             => 'required',
                'b_country'             => 'required', 
                'b_telephone'           => 'required',
                'b_web'                 => 'required',
                'bank_name'             => 'required',
                'bank_branch_name'      => 'required', 
                'b_acc_no'              => 'required',
                'b_sub_acc_no'          => 'required',
                'b_license_no'          => 'required', 
                'b_description'         => 'required',
                'image'                 => 'required'    
                ]);


                $file = $request->image;
                $destinationPath = 'uploads/branch_images';
                $filename = $file->getClientOriginalName();
                $dateTime = Carbon::now()->format('Y_m_d_H_i_s_A');
                $full_name = $dateTime.'__'.$filename;

                $upload_success = $file->move($destinationPath, $full_name);


                    BranchInfo::create([
                        // 'branch_id'             => $request->branch_id,
                        'company_id'            => $request->company_name,
                        'branch_name'           => $request->branch_name,
                        'branch_type'           => $request->branch_type,
                        'b_mobile'              => $request->b_mobile,
                        'b_email'               => $request->b_email,
                        'b_address'             => $request->b_address,
                        'b_country'             => $request->b_country,
                        'b_telephone'           => $request->b_telephone, 
                        'b_web'                 => $request->b_web,
                        'bank_name'             => $request->bank_name,
                        'bank_branch_name'      => $request->bank_branch_name,
                        'b_acc_no'              => $request->b_acc_no,
                        'b_sub_acc_no'          => $request->b_sub_acc_no,
                        'b_license_no'          => $request->b_license_no,
                        'b_description'         => $request->b_description,
                        'image'                 => $full_name
                    ]);



        Session::flash('flash_message', 'BranchInfo added!');

        return redirect('branches/branch-info');
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
        $branchinfo = BranchInfo::findOrFail($id);

        return view('branch-info.show', compact('branchinfo'));
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
        $branchinfo = BranchInfo::findOrFail($id);
        $companies = CompanyInfo::pluck('company_name','id');

        return view('branch-info.edit', compact('branchinfo','companies'));
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
        
        // $branchinfo = BranchInfo::findOrFail($id);
        // $branchinfo->update($requestData);
            $this->validate($request, [
                'company_name'          => 'required', 
                'branch_name'           => 'required', 
                'branch_type'           => 'required', 
                'b_mobile'              => 'required',
                'b_email'               => 'required',  
                'b_address'             => 'required',
                'b_country'             => 'required', 
                'b_telephone'           => 'required',
                'b_web'                 => 'required',
                'bank_name'             => 'required',
                'bank_branch_name'      => 'required',
                'b_acc_no'              => 'required',
                'b_sub_acc_no'          => 'required',
                'b_license_no'          => 'required', 
                'b_description'         => 'required',
                'image'                 => 'required'   
                ]);
        


        $branch = BranchInfo::findOrFail($id);
        if ($request->file('image')){
            $file = $request->image;
            $destinationPath = 'uploads/branch_images';
            $filename = $file->getClientOriginalName();
            $dateTime = Carbon::now()->format('Y_m_d_H_i_s_A');
            $full_name = $dateTime.'__'.$filename;
            $upload_success = $file->move($destinationPath, $full_name);
            $request->merge(['image' => $filename ]);
            unlink($destinationPath.'\\'.$branch->image);

        }

        $branch->update([
                'company_id'            => $request->company_name,
                'branch_id'             => 1,
                'branch_name'           => $request->branch_name,
                'branch_type'           => $request->branch_type,
                'b_mobile'              => $request->b_mobile,
                'b_email'               => $request->b_email,
                'b_address'             => $request->b_address,
                'b_country'             => $request->b_country,
                'b_telephone'           => $request->b_telephone, 
                'b_web'                 => $request->b_web,
                'bank_name'             => $request->bank_name,
                'bank_branch_name'      => $request->bank_branch_name,
                'b_acc_no'              => $request->b_acc_no,
                'b_sub_acc_no'          => $request->b_sub_acc_no,
                'b_license_no'          => $request->b_license_no,
                'b_description'         => $request->b_description,
                'image'                 => $full_name
        ]);

        Session::flash('flash_message', 'BranchInfo updated!');

        return redirect('branches/branch-info');
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
        BranchInfo::destroy($id);

        Session::flash('flash_message', 'BranchInfo deleted!');

        return redirect('branches/branch-info');
    }
}
