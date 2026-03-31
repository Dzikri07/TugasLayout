<?php

use Illuminate\Support\Facades\Route;

// Halaman dashboard (halaman utama)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Routes untuk cabang toko
Route::get('/branches', function () {
    return view('branches.index');
})->name('branches.index');

// Routes untuk transaksi
Route::get('/transactions', function () {
    return view('transactions.index');
})->name('transactions.index');

// Routes untuk stok
Route::get('/stocks', function () {
    return view('stocks.index');
})->name('stocks.index');

// Routes untuk user
Route::get('/users', function () {
    return view('users.index');
})->name('users.index');
