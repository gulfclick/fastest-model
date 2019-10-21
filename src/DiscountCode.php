<?php

namespace FastestModels;
use Illuminate\Database\Eloquent\SoftDeletes;
class DiscountCode extends BaseModel
{
    use SoftDeletes;
    protected $guarded= ['id'];
    public function discount ()
    {
        return $this->belongsTo(Discount::class);
    }


}