<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name_en', 'name_ar', 'latitude', 'longitude', 'is_active'
    ];
}
