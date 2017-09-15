<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CustomerInfo;
use App\ItemInfo;

class SalesInvoiceController extends Controller
{
    public function index(){

    	$customerinfos = CustomerInfo::all();
    	$iteminfos     = ItemInfo::all();
    	return view('sales-invoice.index', compact('customerinfos','iteminfos'));
    }
}
