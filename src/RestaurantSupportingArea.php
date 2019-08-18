<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class RestaurantSupportingArea extends Model
{
    protected $fillable = [
        'restaurant_id', 'area_id', 'delivery_time_minutes', 'delivery_fee', 'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
