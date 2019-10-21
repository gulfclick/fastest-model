<?php

namespace FastestModels;
class Notification extends BaseModel
{
    protected $fillable = [
		'contact_name',
		'contact_email',
		'contact_phone',
		'contact_message',
	];
}
