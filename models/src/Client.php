<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id', 'credit', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
