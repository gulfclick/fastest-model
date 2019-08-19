<?php

namespace FastestModels;
class AddressBook extends BaseModel
{
    protected $fillable = [
        'user_id',
        'area_id',
        'block',
        'street',
        'avenue',
        'building_number',
        'place_type',
        'floor',
        'jadda',
        'latitude',
        'longitude',
        'phone_number',
        'is_default',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
