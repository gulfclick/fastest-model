<?php

namespace FastestModels;
class Categoriable extends BaseModel
{
    protected $fillable = [
        'category_id', 'categoriable_id', 'categoriable_type', 'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
