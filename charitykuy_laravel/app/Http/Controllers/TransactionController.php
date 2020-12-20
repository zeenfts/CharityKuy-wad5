<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Transaction;
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
            ->leftJoin('menus', 'menu_id', '=', 'menus.id')
            ->where('name', 'LIKE', '%' . $q . '%')
            ->orwhere('title', 'LIKE', '%' . $q . '%')
            ->orwhere('pembayaran', 'LIKE', '%' . $q . '%')->get(['transactions.*', 'users.name', 'menus.title']);
        // $trsc = User::with('do_trans')->where('name', 'LIKE', '%' . $q . '%')->get();

        if(request()->segment(2) == 'transaksi'){
            $trsc = Transaction::where('status', 'LIKE', '%' . $q . '%')->latest()->paginate(9);
        }

        if (count($trsc) <= 0) {
            if(request()->segment(2) == 'transaksi'){
                return view('user_trans', [
                    'transactions' => $trsc,
                ])->with('error', 'Tidak ada transaksi tersebut');
            }

            return view('admins/transactions', [
                'transactions' => $trsc,
            ])->with('error', 'Tidak ada transaksi tersebut');
        }

        if(request()->segment(2) == 'transaksi'){
            return view('user_trans', [
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

    public function confirm_transc($key_trsc)
    {
        // dd($key_trsc);
        $attr = Transaction::find($key_trsc);
        // dd($attr);
        // $attr->menu_id = $key_trsc->menu_id;
        // $attr->user_id = $key_trsc->user_id;
        // $attr->pembayaran = $key_trsc->pembayaran;

        if(request('money_ver')){
            $attr->status = 'Terverifikasi';
            $attr->money = intval(request('money_ver'));
        }elseif(request('money_non')){
            $attr->status = 'Tidak diterima';
            $attr->money = intval(request('money_non'));
        }

        // dd($attr);
        $dnts = Menu::find($attr->menu_id);

        $total_dnt = 100 / $dnts->progress * $dnts->jumlah;
        $dnts->jumlah += $attr->money;
        $dnts->progress = $dnts->jumlah / $total_dnt * 100;
        $dnts->progress = intval($dnts->progress);
        // dd($dnts);
        if($attr->save() and $dnts->save()){
            if($attr->status == 'Terverifikasi'){
                return redirect()->route('dashboard.transactions')->with('status', 'Pembayaran terverifikasi');
            }
            return redirect()->route('dashboard.transactions')->with('status', 'Pembayaran ditolak');
        }
        return redirect()->route('dashboard.transactions')->with('error', 'Pembayaran gagal dikonfirmasi!!');
    }
}
