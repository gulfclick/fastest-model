<?php

namespace FastestModels;
class AppVersion extends BaseModel
{
    protected $guarded = ['id'];
	
	public function features()
	{
		return $this->hasMany(AppFeature::class, 'app_version_id', 'id');
	}
}
