<?php


namespace FastestModels;


class Branch extends BaseModel
{
    protected $guarded=['id'];
    protected $table="branches";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function supportingAreas()
    {
         return   $this->hasMany(RestaurantSupportingArea::class,'branch_id');
    }

}

