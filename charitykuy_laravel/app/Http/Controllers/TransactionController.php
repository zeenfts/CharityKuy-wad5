<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function read_transc()
    {
        $q = request('search_text');
        // $trsc = Transaction::with('trans_by')->where('user_id', 'LIKE', '%' . $q . '%')->latest()->paginate(9);
        $trsc = DB::table('transactions')
            ->leftJoin('users', 'transactions.user_id', '=', 'users.id')
            ->leftJoin('menus', 'transactions.menu_id', '=', 'menus.id')
            ->where('name', 'LIKE', '%' . $q . '%')
            ->orwhere('title', 'LIKE', '%' . $q . '%')
            ->orwhere('pembayaran', 'LIKE', '%' . $q . '%')->get();
        // $trsc = User::with('do_trans')->where('name', 'LIKE', '%' . $q . '%')->get();

        if (count($trsc) <= 0) {
            if(request()->is('dashboard')){
                return view('admins/main', [
                    'transactions' => $trsc,
                ])->with('error', 'Tidak ada transaksi tersebut');
            }

            return view('admins/transactions', [
                'transactions' => $trsc,
            ])->with('error', 'Tidak ada transaksi tersebut');
        }

        if(request()->is('dashboard')){
            return view('admins/main', [
                'transactions' => $trsc,
            ]);
        }

        return view('admins/transactions', [
            'transactions' => $trsc,
            ]);
    }

    public function bayar_donasi($item)
    {
        request()->validate([
            'nominal' => 'required'
        ]);

        $attr = new Transaction();

        $attr->user_id = auth()->user()->id;
        $attr->menu_id = $item;
        $attr->pembayaran = 'bank dummy';
        $attr->money = request('nominal');
        $attr->status = 'Menunggu konfirmasi';

        if($attr->save()){
            return redirect()->route('menus.index', $attr)->with('status', 'Menunggu konfirmasi');
        }
        return redirect()->route('menus.index', $attr)->with('error', 'Gagal berdonasi!!');
    }
}
