<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('index');
})->name('home');

Route::get('/sertifikat-saya', function () {
    // return '../public/img/bsi.png';
})->name('sertifikat-saya');