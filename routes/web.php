<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda (Home)
Route::get('/', function () {
    return view('home');
});

// Halaman Hasil Pencarian
Route::get('/search', function () {
    return view('search-results');
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});

//register
Route::get('/register', function () {
    return view('register');
});

//detail
Route::get('/detail', function () {
    return view('detail');
});

//checkout
Route::get('/checkout', function () {
    return view('checkout');
});