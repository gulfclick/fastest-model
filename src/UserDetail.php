<?php

namespace FastestModels;
class UserDetail extends BaseModel
{
    protected $fillable = [
        'user_id', 'user_type' /* [ client , driver , restaurant ] */, 'api_token', 'device_token', 'device_type' /* [android , ios] */, 'profile_photo', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
