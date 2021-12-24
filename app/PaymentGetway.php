<?php

namespace App;

use Illuminate\Support\Str;

class PaymentGetway {

    private $currency;
    private $discount;

    public function __construct($currency) {
        $this->currency = $currency;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
    public function charge($amount){
        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(4),
            'currency' => $this->currency,
            'invoice_no' => Str::random(4),
            'discount' => $this->discount,
        ];
    }
}