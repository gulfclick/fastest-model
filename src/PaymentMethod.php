<?php

namespace FastestModels;
class PaymentMethod extends BaseModel
{
    protected $fillable = [
        'name_en', 'name_ar', 'is_active'
    ];
}
