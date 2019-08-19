<?php

namespace FastestModels;
class Client extends BaseModel
{
    protected $fillable = [
        'user_id', 'credit', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
