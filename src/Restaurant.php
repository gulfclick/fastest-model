<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends BaseModel
{
	use SoftDeletes;
	
    protected $fillable = [
        'user_id',
		'logo',
		'image',
        'caption_en',
        'caption_ar',
        'establish_date',
        'min_delivery_time',
        'max_delivery_time',
        'status', // [ open / close / busy ]
		'type', // [fast / superfast]
        'credit',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
