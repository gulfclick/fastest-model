<?php

namespace FastestModels;
class FoodAddon extends BaseModel
{
    protected $fillable = [
        'food_id',
        'addon_id',
        'status', // [optional / required]
        'is_active'
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
