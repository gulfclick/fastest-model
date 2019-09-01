<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends BaseModel
{
	use SoftDeletes;
	
    protected $fillable = [
        'restaurant_id', 'name_en', 'name_ar', 'description_en', 'description_ar',
        'image', 'icon', 'price', 'preparation_time_minutes', 'average_rate', 'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }
}
