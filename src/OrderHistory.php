<?php

namespace FastestModels;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $fillable = [
        'order_id',
        'status', // [ init , completed, canceled, rollback, preparing, on-the-go, delivered ]
    ];
}
