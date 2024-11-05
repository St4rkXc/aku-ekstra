<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/attendance', function () {
    return view('dashboard.attendance');
});
