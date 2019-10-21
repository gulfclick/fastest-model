<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class UserDetail extends BaseModel
{
	use SoftDeletes;
	
    protected $fillable = [
        'user_id', 'user_type' /* [ client , driver , restaurant,admin ] */, 'api_token', 'device_token', 'device_type' /* [android , ios] */, 'profile_photo', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
