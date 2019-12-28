<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Food extends BaseModel
{
	use SoftDeletes;
	
    protected $guarded=['id'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class,'branch_id');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoriable');
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
