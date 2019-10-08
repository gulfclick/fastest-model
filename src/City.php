<?php

namespace FastestModels;
class City extends BaseModel
{
    protected $gaurded = ['id'];
	
	public function areas()
	{
		return $this->hasMany(Area::class);
	}
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
