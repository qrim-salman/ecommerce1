<?php 

Route::namespace("Frontend")->group(function() {
	Route::get("/", "HomeController@getIndex")->name("frontend.home");

	Route::prefix("product")->group(function() {
		Route::get("/", "ProductController@getIndex")->name("frontend.product");
		Route::get("/detail", "ProductController@getDetail")->name("frontend.product.detail");
	});
});