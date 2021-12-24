<?php

namespace App;

use Illuminate\Support\Str;

class PaymentGetway {
    
    public function charge($amount){
        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(4)
        ];
    }
}