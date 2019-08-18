<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name_en', 'name_ar', 'is_active'
    ];
}
