<?php

namespace FastestModels;
class Driver extends BaseModel
{
    protected $fillable = [
        'user_id',
        'transport_mode_en',
        'transport_mode_ar',
        'driving_license',
        'plate_number',
        'status', // [online / offline]
        'credit',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
