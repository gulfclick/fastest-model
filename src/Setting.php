<?php

namespace FastestModels;
class Setting extends BaseModel
{
    protected $fillable=[
		'setting_key',
		'setting_value',
		'setting_placeholder',
	];
}