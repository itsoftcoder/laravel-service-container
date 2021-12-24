<?php

namespace App;

use Illuminate\Support\Str;

class PaymentGetway {

    private $currency;

    public function __construct($currency) {
        $this->currency = $currency;
    }
    
    public function charge($amount){
        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(4),
            'currency' => $this->currency,
        ];
    }
}