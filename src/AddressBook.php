<?php

namespace FastestModels;
use App\User;
class AddressBook extends BaseModel
{
    protected $guarded=['id'];

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
