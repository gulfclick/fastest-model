<?php

namespace FastestModels;
class ContactUs extends BaseModel
{
    protected $fillable = [
		'contact_name',
		'contact_email',
		'contact_phone',
		'contact_message',
	];
}
