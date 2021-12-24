<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGetway {
    
    public function charge($amount)
    {
        # code...

        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(4)
        ];
    }
}