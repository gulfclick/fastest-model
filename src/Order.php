<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends BaseModel
{
	use SoftDeletes;
	//status  ==> init ,Accepted Restaurant,completed ,canceled , rollback
    //payment_method==>  1==>myfatoorah,2==>Cash,3==>Knet
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

    public function paymentSuccess()
    {
        return $this->hasOne(Payment::class,'order_id')->where('gateway_status',"Succss");

    }

    public function from()
    {
        if($this->items->count()>=1)
            if(isset($this->items[0]->branch)){
                return ['lat'=>$this->items[0]->branch->latitude,'long'=>$this->items[0]->branch->longitude];
            }


        return ['lat'=>$this->latitude,'long'=>$this->longitude];
    }
    public function to()
    {
        return ['lat'=>$this->destination_latitude,'long'=>$this->destination_longitude];
    }

    public function destinationArea()
    {
        return $this->belongsTo(Area::class,'destination_area');
    }
}
