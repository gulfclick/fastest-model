<?php

namespace FastestModels;
class Area extends BaseModel
{
    protected $fillable = [
        'city_id', 'name_en', 'name_ar', 'latitude', 'longitude', 'is_active'
    ];
	
	public function city()
	{
		return $this->belongsTo(City::class);
	}
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
