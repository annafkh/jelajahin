<?php

use App\Models\Wisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WisataController;

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata.index');

Route::get('/', function () {
    return view('home');
});

Route::get('/wisata/{id}', function ($id) {
    $wisata = \App\Models\Wisata::findOrFail($id);
    return view('wisata.show', compact('wisata'));
})->name('wisata.show');

