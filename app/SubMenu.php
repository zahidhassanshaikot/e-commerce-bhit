<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $guarded=[];
    public function menu(){
     return $this->belongsTo(Menu::class);
 }
    public function subSubMenu()
    {
        return $this->hasMany(SubSubMenu::class);
    }
}
