<?php

namespace FastestModels;
use App\User;
class AddressBook extends BaseModel
{
    protected $fillable = [
        'user_id',
		'title',
        'area_id',
        'block',
        'street',
        'avenue',
        'building_number',
        'place_type',
        'floor',
        'jadda',
        'latitude',
        'longitude',
        'phone_number',
		'extra_info',
        'is_default',
        'is_active'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
	
	public function getFullAddress()
	{
		return "{$this->area->name} {$this->block} {$this->street} {$this->avenue} {$this->building_number} {$this->floor} {$this->jadda}";
	}
	
	protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new ActiveScope);
    }
}
