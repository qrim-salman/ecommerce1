<?php

// User authentication routes
Auth::routes();

// Admin authentication routes
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/logout/admin', 'Auth\LoginController@adminLogout')->name('admin.logout');

// App routes
include base_path("routes/backend.php");
include base_path("routes/frontend.php");