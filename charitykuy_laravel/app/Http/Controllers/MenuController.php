<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function read_menus()
    {
        $menus = Menu::whereTipe('donasi')->latest()->paginate(8);
        $non_dnt = Menu::whereTipe('non donasi')->get();
        return view('home', [
            'menus' => $menus,
            'non_dnt' => $non_dnt,
            ]);
    }

    public function menu_detail(Menu $item)
    {
        return view('menu_action',[
            'item'=>$item,
        ]);
    }

    public function add_menu()
    {
        return view('secondary/menu_add');
    }

    public function store_menu()
    {
        // return view('secondary/menu_edit');
    }

    public function edit_menu(Menu $item)
    {
        return view('secondary/menu_edit', [
            'item' => $item,
            ]);
    }

    public function update_menu()
    {
        // return view('secondary/menu_add');
    }
}
