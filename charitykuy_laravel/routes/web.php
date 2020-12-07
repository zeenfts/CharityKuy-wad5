<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'read_menus'])->name('menus.read');
Route::get('detail/{item:id}', [MenuController::class, 'menu_detail'])->name('menus.detail');