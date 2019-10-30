<?php

namespace FastestModels;

class DriverLocation extends BaseModel
{
    protected $fillable = [
        'driver_id',
        'latitude',
		'longitude'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
	
	
}
