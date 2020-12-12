<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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

    public function store_menu(Request $request)
    {
        if(!$request->hasFile('img_path')){
            $image='';
        }else{
            $image = request('img_path')->getClientOriginalName();
            $PATH = 'img_static/'.$image;
            File::put($PATH, file_get_contents(request('img_path')->getRealPath()));
        }
        $attr = new Menu();

        $attr->title = request('titlee');
        $attr->jumlah = request('jumlah');
        $attr->progress = request('progress');
        $attr->deskripsi = request('deskripsi');
        $attr->tipe = request('tiped');
        $attr->gambar = $image;

        if($attr->save()){
            return redirect()->route('menus.index')->with('success', 'Donasi ditambahkan');
        }else{
            return redirect()->route('menus.index')->with('error', 'Donasi gagal ditambahkan!!');
        }
    }

    public function edit_menu(Menu $item)
    {
        return view('secondary/menu_edit', [
            'item' => $item,
            ]);
    }

    public function update_menu($item, Request $request)
    {
        $attr = Menu::find($item);

        $attr->title = request('titlee');
        $attr->jumlah = request('jumlah');
        $attr->progress = request('progress');
        $attr->deskripsi = request('deskripsi');
        $attr->tipe = request('tiped');

        if(!$request->hasFile('img_path')){
            $attr->gambar = request('img_hddn');
        }else{
            $image = request('img_path')->getClientOriginalName();
            $PATH = 'img_static/'.$image;
            File::put($PATH, file_get_contents(request('img_path')->getRealPath()));

            if(File::exists(public_path('img_static').'/'.$attr->gambar)){
                File::delete(public_path('img_static').'/'.$attr->gambar);
            }

            $attr->gambar = $image;
        }

        if($attr->save()){
            return redirect()->route('menus.detail', $attr)->with('success', 'Donasi berhasil diupdate');
        }else{
            return redirect()->route('menus.detail', $attr)->with('error', 'Donasi gagal diupdate!!');
        }
    }

    public function delete_menu(Menu $item)
    {
        // $prod = Product::find($id_item);
        if(File::exists(public_path('img_static').'/'.$item->gambar)){
            File::delete(public_path('img_static').'/'.$item->gambar);
        }
        // else{
        //     dd('File does not exists.');
        // }
        if($item->delete()){
            return redirect(route('menus.index'))->with('success', 'Donasi telah dihapus');
        }else{
            return redirect(route('menus.index'))->with('error', 'Gagal menghapus donasi!!');
        }
    }
}
