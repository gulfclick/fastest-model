<?php

namespace FastestModels;

class OrderHistory extends BaseModel
{
    protected $fillable = [
        'order_id',
        'driver_id',
        'status', // [ init ,Accepted By Restaurant, completed, canceled, rollback, preparing, onWay, delivered ]
        'description',
		'driver_latitude',
		'driver_longitude'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
	
	
}
