<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class FoodAddon extends Model
{
    protected $fillable = [
        'food_id',
        'addon_id',
        'status', // [optional / required]
        'is_active'
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
}
