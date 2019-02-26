<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index(){
        $obj_menu=Menu::with('subMenu','subMenu.subSubMenu')->get();

        return view('back-end.menu.manage-menu',[
            'obj_menu'=>$obj_menu,
        ]);

    }
    public function deleteMenu($id){
        return $id;
        $obj_menu=Menu::find($id);

       

    }
    public function newMenuAdd(Request $request){
        // return $request;
        $this->validate($request, [
            'menu_name' => 'required|max:30|min:2',
        ]);
        $obj_menu=new Menu();
        $obj_menu->menu_name=$request->menu_name;
        $obj_menu->save();

        return redirect()->back()->with('message','Successfully add new menu');

    }
}
