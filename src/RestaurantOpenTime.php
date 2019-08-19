<?php

namespace FastestModels;
class RestaurantOpenTime extends BaseModel
{
    protected $fillable = [
        'restaurant_id',
        'time_of_day', // [ morning , noon , evening , night ]
        'open_time',
        'close_time',
        'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
