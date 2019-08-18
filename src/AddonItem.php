<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class AddonItem extends Model
{
    protected $fillable = [
        'addon_id', 'name_en', 'name_ar', 'icon', 'price', 'is_active'
    ];

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
}
