<?php

// User authentication routes
Auth::routes();

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// Admin authentication routes
Route::get('/login/admin', 'Auth\Admin\AuthController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'Auth\Admin\AuthController@adminLogin');
Route::post('/logout/admin', 'Auth\Admin\AuthController@adminLogout')->name('admin.logout');

// App routes
include base_path("routes/backend.php");
include base_path("routes/frontend.php");