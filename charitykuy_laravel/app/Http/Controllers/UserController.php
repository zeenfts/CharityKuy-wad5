<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function read_users()
    {
        $q = request('search_text');
        $usr = User::where('name', 'LIKE', '%' . $q . '%')
        ->orwhere('email', 'LIKE', '%' . $q . '%')
        ->orwhere('roles', 'LIKE', '%' . $q . '%')->latest()->paginate(9);

        if (count($usr) <= 0) {
            if(request()->is('dashboard')){
                return view('admins/main', [
                    'users' => $usr,
                ])->with('error', 'Tidak ada user tersebut');
            }

            return view('admins/users', [
                'users' => $usr,
            ])->with('error', 'Tidak ada user tersebut');
        }

        return view('admins/users', [
            'users' => $usr,
            ]);
    }
}
