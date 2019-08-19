<?php
namespace FastestModels;
class MenuItem extends BaseModel
{
    public $table='menu_item';
    public $timestamps=false;
    protected $guarded=['id'];
    public function views()
    {
        return $this->hasMany(MenuItem::class,'parent_id');
    }


}