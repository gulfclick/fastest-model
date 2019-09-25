<?php

namespace FastestModels;
class Addon extends BaseModel
{
    protected $fillable = [
        'restaurant_id', 'name_en', 'name_ar', 'status', 'icon', 'is_active'
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
	
    public function items()
    {
        return $this->hasManu(AddonItem::class, 'addon_id', 'id');
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
