<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded=[];
    public function subMenu()
    {
        return $this->hasMany(SubMenu::class);
    }
}
