<?php

namespace FastestModels;
class Role extends BaseModel
{
    protected $guarded=['id'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'permission_role');
    }

}