<?php

namespace App\Http\Controllers;


use App\PaymentGetway;
use App\Filter\Filtering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PayOrderController extends Controller
{
    //
    public function store(PaymentGetway $payment)
    {
        
        dd($payment->charge(100));

        // $filter = new Filtering();
        // dd($filter->test(100));
    }
}
