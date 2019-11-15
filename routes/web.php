<?php

Route::get('/', function () {
	return view('welcome');
});

Route::get('/robes', function () {
	$products = App\Dress::all()->whereIn('id', range(1, 7));
	return view('dresses', compact('products'));
});

Route::get('/vestes', function () {
	$products = App\Dress::all()->whereIn('id', range(8, 9));
	return view('dresses', compact('products'));
});

Route::get('/jupes', function () {
	$products = App\Dress::all()->whereIn('id', range(10, 11));
	return view('dresses', compact('products'));
});

Route::get('/other', function () {
	$products = App\Dress::all()->whereIn('id', 12);
	return view('dresses', compact('products'));
});

Route::get('/about', function () {
	return view('about');
});

Route::get('/cart', function () {
	$total = 0;
	return view('cart', compact('total'));
});

Route::get('/add/{id}', 'Add_To_Cart_Controller@add_product');

Route::post('/s/select/{id}', 'Select_Size_Controller@select');
Route::post('/quantity/{id}', 'Products_Quantity_Controller@quantity');
Route::get('/delete/{id}', 'Remove_From_Cart_Controller@remove')->name('remove.product');



