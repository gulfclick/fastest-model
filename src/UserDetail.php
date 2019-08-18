<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
        'user_id', 'api_token', 'device_token', 'device_type' /* [android , ios] */, 'profile_photo', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
