<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends BaseModel
{
	use SoftDeletes;
	
    protected $fillable = [
        'parent_category_id',
        'name_en',
        'name_ar',
        'image',
        'icon',
        'sort_order',
        'description_en',
        'description_ar',
		'type',
        'is_active',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function foods()
    {
        return $this->morphedByMany(Food::class, 'categoriable');
    }

    public function restaurants()
    {
        return $this->morphedByMany(Restaurant::class, 'categoriable');
    }
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
