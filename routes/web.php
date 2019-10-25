<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/robes', function () {
	$products = App\Dress::all();
	return view('dresses', compact('products'));
});

Route::get('/cart', function () {
	$total = 0;
	return view('cart', compact('total'));
});

Route::get('/add/{id}', 'Add_To_Cart_Controller@add_product');

Route::post('/s/select/{id}', 'Select_Size_Controller@select');
Route::post('/quantity/{id}', 'Products_Quantity_Controller@quantity');
Route::get('/delete/{id}', 'Remove_From_Cart_Controller@remove')->name('remove.product');



