<?php

namespace FastestModels;
class RestaurantSupportingArea extends BaseModel
{
    protected $fillable = [
        'restaurant_id', 'branch_id', 'area_id', 'delivery_time_minutes', 'delivery_fee', 'is_active'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
