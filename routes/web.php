<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
   return view('index',[
       "menu"=>"dashboard"
   ]);
})->name('admin');

Route::get('halaman_login', function () {
    return view('login',[
        "menu"=>"login"
    ]);
 })->name('login');