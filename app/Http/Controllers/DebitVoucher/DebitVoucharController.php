<?php

namespace App\Http\Controllers\DebitVoucher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DebitVoucharController extends Controller
{
    public function index(){
    	return view('debit-vouchar.index');
    }
}
