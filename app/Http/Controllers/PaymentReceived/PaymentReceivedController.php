<?php

namespace App\Http\Controllers\PaymentReceived;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentReceivedController extends Controller
{
    public function index(){
    	return view('payment-received.index');
    }
}
