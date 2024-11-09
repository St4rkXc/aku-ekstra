<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/friday-attendance', function () {
    return view('dashboard.fri-attendance');
});
Route::get('/saturday-attendance', function () {
    return view('dashboard.sat-attendance');
});
