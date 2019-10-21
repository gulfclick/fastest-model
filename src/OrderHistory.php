<?php

namespace FastestModels;

class OrderHistory extends BaseModel
{
    protected $fillable = [
        'order_id',
        'status', // [ init , completed, canceled, rollback, preparing, onWay, delivered ]
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
	
	
}
