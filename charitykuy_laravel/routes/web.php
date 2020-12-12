<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'read_menus'])->name('menus.index');
Route::get('{item:id}/detail', [MenuController::class, 'menu_detail'])->name('menus.detail');

Route::get('create', [MenuController::class, 'add_menu'])->name('menus.add');
Route::post('create', [MenuController::class, 'store_menu'])->name('menus.store');
Route::get('{item:id}/edit', [MenuController::class, 'edit_menu'])->name('menus.edit');
Route::patch('{id}/edit', [MenuController::class, 'update_menu'])->name('menus.update');
Route::delete('{item:id}/delete',[MenuController::class, 'delete_menu'])->name('menus.delete');