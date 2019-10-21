<?php

namespace FastestModels;
class RestaurantActivityHour extends BaseModel
{
    protected $gaurded = ['id'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
