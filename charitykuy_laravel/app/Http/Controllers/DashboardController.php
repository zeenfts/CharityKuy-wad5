<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class DashboardController extends Controller
{
    public function index()
    {
        $q = request('search_text');
        $usr = User::where('name', 'LIKE', '%' . $q . '%')
            ->orwhere('email', 'LIKE', '%' . $q . '%')
            ->orwhere('roles', 'LIKE', '%' . $q . '%')->get();

        $trsc = \DB::table('transactions')
            ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
            ->leftJoin('menus', 'transactions.menu_id', '=', 'menus.id')
            ->where('name', 'LIKE', '%' . $q . '%')
            ->orwhere('title', 'LIKE', '%' . $q . '%')
            ->orwhere('pembayaran', 'LIKE', '%' . $q . '%')->get(['transactions.*', 'users.name', 'menus.title']);

        $menus = Menu::where('title', 'LIKE', '%' . $q . '%')
            ->orwhere('tipe', 'LIKE', '%' . $q . '%')->get();

        return view('admins/main',[
            'menus' => $menus,
            'transactions' => $trsc,
            'users' => $usr
        ]);
    }
}
