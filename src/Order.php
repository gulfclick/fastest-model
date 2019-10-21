<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends BaseModel
{
	use SoftDeletes;
	
    protected $gaurded = ['id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    public function pickup()
    {
        return $this->belongsTo(AddressBook::class);
    }

    public function destination()
    {
        return $this->belongsTo(AddressBook::class);
    }
}
