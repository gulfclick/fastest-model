<?php

namespace FastestModels;
class Restaurant extends BaseModel
{
    protected $fillable = [
        'user_id',
        'caption_en',
        'caption_ar',
        'establish_date',
        'min_delivery_time',
        'max_delivery_time',
        'status', // [ open / close / busy ]
        'credit',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
