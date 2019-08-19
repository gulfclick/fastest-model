<?php

namespace FastestModels;
class CategoryFood extends BaseModel
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
