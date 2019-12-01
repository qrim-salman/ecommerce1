<?php 

Route::namespace("Frontend")->group(function() {
	Route::get("/", "HomeController@getIndex")->name("frontend.home");
});