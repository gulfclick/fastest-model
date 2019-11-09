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

    public function addons()
    {
        return $this->hasMany(OrderAddonItem::class, 'order_item_id', 'id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
