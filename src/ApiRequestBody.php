<?php

namespace App;

namespace FastestModels;

class ApiRequestBody extends BaseModel
{
    protected $fillable = [
        'request_id',
        'header',
        'body'
    ];
}
