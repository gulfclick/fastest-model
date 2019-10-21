<?php

namespace FastestModels;
class Notification extends BaseModel
{
    protected $fillable = [
		'user_detail_id',
		'notification_title_en',
		'notification_title_ar',
		'notification_message_en',
		'notification_message_ar',
		'notification_image'
	];
}
