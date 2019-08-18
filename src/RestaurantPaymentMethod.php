<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class RestaurantPaymentMethod extends Model
{
    protected $fillable = [
        'restaurant_id', 'payment_method_id', 'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
