<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model
{
    protected $fillable = [
        'category_id', 'food_id', 'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
