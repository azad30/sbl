<?php

namespace App\Http\Controllers\SalesInvoice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ItemInfo;

class ItemCostAjaxCalculateController extends Controller
{
    public function itemCostCalculation(Request $request){

    	$p = ItemInfo::select('item_price')->where('id',$request->id)->first();
        return response()->json($p);
    }
}
