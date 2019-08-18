<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class RestaurantCategory extends Model
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
