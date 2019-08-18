<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class OrderAddonItem extends Model
{
    protected $fillable = [
        'order_item_id', 'addon_item_id'
    ];

    public function orderItem()
    {
        return $this->belongsTo(OrderItem::class);
    }

    public function addonItem()
    {
        return $this->belongsTo(AddonItem::class);
    }
}
