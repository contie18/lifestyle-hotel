<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/rooms', 'pages.rooms')->name('rooms');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/services', 'pages.services')->name('services');