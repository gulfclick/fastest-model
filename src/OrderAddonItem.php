<?php

namespace FastestModels;
class OrderAddonItem extends BaseModel
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
