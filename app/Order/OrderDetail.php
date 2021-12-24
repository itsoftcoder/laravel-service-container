<?php

namespace App\Order;

use App\PaymentGetway;

class OrderDetail {

    public function __construct(PaymentGetway $payment) {
        $payment->setDiscount(20);
    }
    
    public function all(){

        return [
            "name" => "alamin",
            "email" => "gemabt@gmm",
        ];
    }

}