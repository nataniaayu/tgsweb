<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('pet.home');

Route::get('/reserve', function () {
    return view('reserve');
})->name('pet.reserve');

Route::get('/petshop', function () {
    return view('petshop');
})->name('pet.shop');