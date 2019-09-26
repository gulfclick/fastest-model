<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;

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
}
