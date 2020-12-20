<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function bayar_donasi($item)
    {
        request()->validate([
            'nominal' => 'required'
        ]);

        $attr = new Transaction();

        $attr->user_id = auth()->user()->id;
        $attr->menu_id = $item;
        $attr->money = request('nominal');
        $attr->status = 'Menunggu konfirmasi';

        if($attr->save()){
            return redirect()->route('menus.index', $attr)->with('status', 'Menunggu konfirmasi');
        }
        return redirect()->route('menus.index', $attr)->with('error', 'Gagal berdonasi!!');
    }
}
