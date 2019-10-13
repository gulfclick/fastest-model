<?php

namespace FastestModels;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends BaseModel
{
    use SoftDeletes;
    protected $guarded= ['id'];

    public function codes()
    {
        return $this->hasMany(DiscountCode::class);
    }

    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class,'discount_restaurant');
    }


}