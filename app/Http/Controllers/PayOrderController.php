<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Billing\PaymentGetway;

class PayOrderController extends Controller
{
    //
    public function store(PaymentGetway $payment)
    {
        # code...
        // $payment =  new PaymentGetway();
        dd($payment);
    }
}
