<?php

namespace App\Http\Controllers\SalesInvoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CustomerInfo;

class SalesInvoiceAjaxController extends Controller
{
    public function customerInformation(Request $request){

    	$p = CustomerInfo::select('cu_address','cu_mobile','reference_name','created_at')->where('id',$request->id)->first();
        return response()->json($p);
    }
}
