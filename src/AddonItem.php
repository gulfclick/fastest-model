<?php

namespace FastestModels;
class AddonItem extends BaseModel
{
    protected $fillable = [
        'addon_id', 'name_en', 'name_ar', 'icon', 'price', 'is_active'
    ];

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
