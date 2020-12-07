<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'title' => 'Donasi Bencana',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan
            beban saudara kita yang menjadi korban bencana alam di wilayah Nusantara dan semoga kepedulian kita
            bersama dapat menjadi anugerah bagi mereka yang membutuhkan',
            'gambar' => 'bencana.png',
            'jumlah' => 2500000,
            'progress' => 25,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Kemanusiaan',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan beban
            saudara kita yang kekurangan di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah
            bagi mereka yang membutuhkan',
            'gambar' => 'kemanusiaan.png',
            'jumlah' => 5000000,
            'progress' => 50,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Rumah Ibadah',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan biaya
            pembangunan rumah ibadah di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'rumah.png',
            'jumlah' => 5000000,
            'progress' => 50,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Zakat',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk melakukan zakat',
            'gambar' => 'zakat.png',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);

        Menu::create([
            'title' => 'Kurban',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk melakukan kurban',
            'gambar' => 'kurban.png',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);

        Menu::create([
            'title' => 'Haji',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk menabung haji',
            'gambar' => 'haji.png',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);
    }
}
