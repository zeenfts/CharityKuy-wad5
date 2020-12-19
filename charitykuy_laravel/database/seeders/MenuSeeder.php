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
            'title' => 'Donasi Action Against Hunger',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan masalah kelaparan di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'hunger.png',
            'jumlah' => 15000000,
            'progress' => 65,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Room To Read',
            'deskripsi' => 'Kami berharap langkah ini akan menyediakan buku pengetahuan di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'roomread.png',
            'jumlah' => 25000000,
            'progress' => 35,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Educate',
            'deskripsi' => 'Kami berharap langkah ini akan membantu pembangunan fasilitas pendidikan di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'educate.png',
            'jumlah' => 125000000,
            'progress' => 85,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Save the Children',
            'deskripsi' => 'Kami berharap langkah ini akan meningkatkan taraf hidup anak-anak di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'children.png',
            'jumlah' => 7000000,
            'progress' => 50,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Bencana I',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan
            beban saudara kita yang menjadi korban bencana alam di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'bencana1.png',
            'jumlah' => 7300000,
            'progress' => 30,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Conservation International',
            'deskripsi' => 'Kami berharap langkah ini akan memperbaiki keadaan alam di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'konservasi.png',
            'jumlah' => 44300000,
            'progress' => 40,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Water.org',
            'deskripsi' => 'Kami berharap langkah ini akan meningkatkan pasokan air di wilayah Nusantara yang kekurangan dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'waterorg.png',
            'jumlah' => 7600000,
            'progress' => 60,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Bencana II',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan
            beban saudara kita yang menjadi korban bencana alam di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'bencana2.png',
            'jumlah' => 400000,
            'progress' => 10,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Donasi Bencana III',
            'deskripsi' => 'Kami berharap langkah ini akan sedikit meringankan
            beban saudara kita yang menjadi korban bencana alam di wilayah Nusantara dan semoga kepedulian kita bersama dapat menjadi anugerah bagi
            mereka yang lebih membutuhkan',
            'gambar' => 'bencana3.png',
            'jumlah' => 33300000,
            'progress' => 60,
            'tipe' => 'donasi'
        ]);

        Menu::create([
            'title' => 'Infaq',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk diinfakkan',
            'gambar' => 'infaq.jpg',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);

        Menu::create([
            'title' => 'Shodaqoh',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk shodaqoh',
            'gambar' => 'sedekah.png',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);

        Menu::create([
            'title' => 'Wakaf',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk wakaf',
            'gambar' => 'wakaf.jpg',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
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
            'title' => 'Haji dan Umroh',
            'deskripsi' => 'Mari sisihkan sebagian harta kita untuk menabung haji dan umroh',
            'gambar' => 'haji.png',
            'jumlah' => 0,
            'progress' => 0,
            'tipe' => 'non donasi'
        ]);
    }
}
