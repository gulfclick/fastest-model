<?php


namespace FastestModels;
class Payment extends BaseModel
{
    protected $guarded=['id'];

    public function client()
    {
        return $this->belongsTo(Client::class,'user_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }


}