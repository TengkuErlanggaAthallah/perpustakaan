<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');

Route::get('/kategori', function () {
    return view('layouts.kategori');
})->name('layouts.kategori');

Route::get('/Rakbuku', function () {
    return view('layouts.Rakbuku');
})->name('layouts.Rakbuku');

Route::get('/TentangKami', function () {
    return view('layouts.aboutus');
})->name('layouts.aboutus');

Route::get('/fiksi', function () {
    return view('genre.fiksi');
})->name('genre.fiksi');

Route::get('/nonfiksi', function () {
    return view('genre.nonfiksi');
})->name('genre.nonfiksi');

Route::get('/profile', function () {
    return view('layouts.profile');
})->name('layouts.profile');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function(){
    \Auth::logout();
    return redirect('/');
});