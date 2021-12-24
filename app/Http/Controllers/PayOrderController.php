<?php

namespace App\Http\Controllers;


use App\PaymentGetway;
use App\Filter\Filtering;
use App\Order\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PayOrderController extends Controller
{
    //
    public function store(OrderDetail $orderDetail, PaymentGetway $payment)
    {
        dump($orderDetail->all());
        dump($payment->charge(100));
        dump($payment->charge(400));
        dump($payment->charge(600));

        // $filter = new Filtering();
        // dd($filter->test(100));
    }
}
