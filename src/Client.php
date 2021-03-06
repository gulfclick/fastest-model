<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Client extends BaseModel
{
	use SoftDeletes;
    protected $fillable = [
        'user_id', 'credit', 'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
