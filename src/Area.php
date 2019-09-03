<?php

namespace FastestModels;
class Area extends BaseModel
{
    protected $fillable = [
        'name_en', 'name_ar', 'latitude', 'longitude', 'is_active'
    ];
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
