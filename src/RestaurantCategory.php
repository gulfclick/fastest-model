<?php

namespace FastestModels;

class RestaurantCategory extends BaseModel
{
    protected $fillable = [
        'restaurant_id', 'category_id', 'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
