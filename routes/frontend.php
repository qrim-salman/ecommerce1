<?php 

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'frontend.home')->middleware('auth');