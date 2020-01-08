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
	
	public function tempCategories()
    {
        return $this->belongsToMany(Category::class, 'categoriables','categoriable_id')->where("categoriable_type","Restaurant");
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }
	
	public function times()
    {
        return $this->hasMany(RestaurantActivityHour::class,'restaurant_id');
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

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
