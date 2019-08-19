<?php

namespace FastestModels;
class Addon extends BaseModel
{
    protected $fillable = [
        'restaurant_id', 'name_en', 'name_ar', 'icon', 'is_active'
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
