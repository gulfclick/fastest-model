<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends BaseModel
{
	use SoftDeletes;
	
    protected $gaurded = ['id'];
	
	protected $appends = ['day_of_week'];

    public function getDayOfWeekAttribute()
    {
		return date('w', strtotime($this->created_at));
    }

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

    public function histories()
    {
        return $this->hasMany(OrderHistory::class, 'order_id', 'id');
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
