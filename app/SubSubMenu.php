<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubMenu extends Model
{
    protected $guarded=[];
    public function subMenu(){
     return $this->belongsTo(SubMenu::class);
 }
}
