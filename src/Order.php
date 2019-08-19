<?php

namespace FastestModels;
class Order extends BaseModel
{
    protected $fillable = [
        'unique_number',
        'client_id',
        'restaurant_id',
        'driver_id',

        'pickup_name',
        'pickup_phone',
        'pickup_address_id',
        'pickup_address',
        'pickup_latitude',
        'pickup_longitude',

        'destination_name',
        'destination_phone',
        'destination_address_id',
        'destination_address',
        'destination_latitude',
        'destination_longitude',

        'delivery_type',
        'expected_delivery_datetime',

        'total_price',
        'total_discount',
        'payment_method',
        'status' // [ init / completed / canceled / rollback ]
    ];

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

    public function pickup()
    {
        return $this->belongsTo(AddressBook::class);
    }

    public function destination()
    {
        return $this->belongsTo(AddressBook::class);
    }
}
