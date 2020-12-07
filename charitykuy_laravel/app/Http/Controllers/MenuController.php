<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function read_menus()
    {
        $menus = Menu::oldest()->paginate(3);
        return view('home', compact('menus'));
    }
}
