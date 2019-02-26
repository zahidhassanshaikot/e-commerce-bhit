<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index(){
        $obj_menu=Menu::with('subMenu','subMenu.subSubMenu')->get();

        return response()->json(compact('obj_menu'));

    }
}
