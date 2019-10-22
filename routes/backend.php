<?php

Route::group(['middleware' => ['web', 'admin']], function() {
	Route::group(['prefix' => 'dashboard'], function() {
		Route::get('/', 'Backend\Dashboard\DashboardController@getIndex')->name('dashboard');
	});

	Route::group(['prefix' => 'manajemen-user'], function() {
		Route::get('/', 'Backend\UserManagement\UserManagementController@getIndex')->name('user-management');
		Route::get('/get-admin', 'Backend\UserManagement\UserManagementController@getAdmin')->name('user-management.admin');
		Route::get('/get-customer', 'Backend\UserManagement\UserManagementController@getCustomer')->name('user-management.customer');

		Route::group(['prefix' => 'admin'], function() {
			Route::get('/', 'Backend\UserManagement\AdminController@getCreate')->name('admin.create');
			Route::post('/', 'Backend\UserManagement\AdminController@postCreate')->name('admin.store');
			Route::get('/edit/{id}', 'Backend\UserManagement\AdminController@getEdit')->name('admin.edit');
			Route::post('/edit/{id}', 'Backend\UserManagement\AdminController@postEdit')->name('admin.update');
			Route::get('/activate/{id}', 'Backend\UserManagement\AdminController@getActivate')->name('admin.activate');
			Route::get('/deactivate/{id}', 'Backend\UserManagement\AdminController@getDeactivate')->name('admin.deactivate');
			Route::post('/delete', 'Backend\UserManagement\AdminController@getDelete')->name('admin.delete');
		});
	});

	Route::group(['prefix' => 'manajemen-barang'], function() {
		Route::get('/', 'Backend\ItemManagement\ItemManagementController@getIndex')->name('item-management');
		Route::get('/get-item', 'Backend\ItemManagement\ItemManagementController@getItem')->name('item-management.item');
		Route::get('/create', 'Backend\ItemManagement\ItemManagementController@getCreate')->name('item-management.create');
		Route::post('/create', 'Backend\ItemManagement\ItemManagementController@postCreate')->name('item-management.store');
		Route::get('/detail/{id}', 'Backend\ItemManagement\ItemManagementController@getDetail')->name('item-management.detail');
		Route::get('/edit/{id}', 'Backend\ItemManagement\ItemManagementController@getEdit')->name('item-management.edit');
		Route::post('/edit/{id}', 'Backend\ItemManagement\ItemManagementController@postEdit')->name('item-management.update');
		Route::post('/delete', 'Backend\ItemManagement\ItemManagementController@getDelete')->name('item-management.delete');
		Route::get('/detail/{id}', 'Backend\ItemManagement\ItemManagementController@getDetail')->name('item-management.detail');
		Route::post('/stok/{item_id}', 'Backend\ItemManagement\ItemManagementController@postStock')->name('item-management.stock');
		Route::get('/image/{item_id}', 'Backend\ItemManagement\ItemManagementController@getImage')->name('item-management.image');
		Route::post('/image/{item_id}', 'Backend\ItemManagement\ItemManagementController@postImage')->name('item-management.store-image');
		Route::post('/image/delete', 'Backend\ItemManagement\ItemManagementController@postDeleteImage')->name('item-management.delete-image');
		
		Route::group(['prefix' => 'kategori'], function() {
			Route::get('/', 'Backend\ItemManagement\ItemCategoryController@getIndex')->name('category');
			Route::get('/get-category', 'Backend\ItemManagement\ItemCategoryController@getCategory')->name('category.list');
			Route::get('/create', 'Backend\ItemManagement\ItemCategoryController@getCreate')->name('category.create');
			Route::post('/create', 'Backend\ItemManagement\ItemCategoryController@postCreate')->name('category.store');
			Route::get('/edit/{id}', 'Backend\ItemManagement\ItemCategoryController@getEdit')->name('category.edit');
			Route::post('/edit/{id}', 'Backend\ItemManagement\ItemCategoryController@postEdit')->name('category.update');
			Route::post('/delete', 'Backend\ItemManagement\ItemCategoryController@getDelete')->name('category.delete');
		});
	});
});