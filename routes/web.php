<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/la-chatterie', 'chatterie')
    ->name('chatterie');

Route::view('/nos-maine-coons', 'maine-coons')
    ->name('maine-coons');

Route::view('/nos-chatons', 'chatons')
    ->name('chatons');

Route::view('/adoption', 'adoption')
    ->name('adoption');

Route::view('/contact', 'contact')
    ->name('contact');
