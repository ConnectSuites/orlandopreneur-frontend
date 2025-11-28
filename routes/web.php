<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::get('/sponsorship', function () {
    return view('sponsorship');
});