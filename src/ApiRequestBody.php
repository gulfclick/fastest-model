<?php

namespace App;

namespace FastestModels;

class ApiRequestBody extends BaseModel
{
    protected $fillable = [
        'api_request_id',
        'header',
        'body'
    ];
}
