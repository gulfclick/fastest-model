<?php


namespace FastestModels;
class Permission extends BaseModel
{
    protected $guarded=['id'];
    public function roles()
    {
        return $this->belongsToMany(Role::class,'permission_role');
    }
}