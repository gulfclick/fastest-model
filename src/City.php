<?php

namespace FastestModels;
class City extends BaseModel
{
    protected $guarded = ['id'];
	
	public function areas()
	{
		return $this->hasMany(Area::class, 'city_id', 'id');
	}
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
