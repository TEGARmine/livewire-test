<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Livewire\Product\Index::class);
Route::get('/{id}/delete', \App\Http\Livewire\Product\Index::class, 'delete')->name('delete');
Route::get('/create', \App\Http\Livewire\Product\Create::class)->name('create');
