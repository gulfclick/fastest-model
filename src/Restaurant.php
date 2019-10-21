<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Restaurant extends BaseModel
{
	use SoftDeletes;

	protected $guarded=['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }

    public function supportingAreas()
    {
        return $this->hasMany(RestaurantSupportingArea::class, 'restaurant_id');
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
