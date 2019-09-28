<?php

namespace FastestModels;

class ApiRequest extends BaseModel
{
    protected $fillable = [
        'path',
        'count'
    ];
}
