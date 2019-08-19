<?php

namespace FastestModels;
class OrderItem extends BaseModel
{
    protected $fillable = [
        'order_id', 'food_id', 'price', 'count'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
