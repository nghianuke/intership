<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('createcaptcha', 'CaptchaController@create');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');
Route::get('/', function () {
    return view('welcome');
});
Route::get('a', function () {
    return view('layout.index');
});
Route::get('productIncategory/{id}','PageHomeController@productIncategory')->name('productIncategory');
Route::get('productInbrand/{id}','PageHomeController@productInbrand')->name('productInbrand');
route::resource('abc','PageHomeController');
Route::resource('brand','BrandController');
Route::resource('category','CategoryController');
Route::resource('customer','CustomerController');
Route::resource('product','ProductController');
Route::resource('order','OrderController');
Route::resource('detail','OrderDetailController');
Route::group(['prefix'=>'cart'],function(){
	route::get('add/{id}','CartController@add')->name('cart.add');
	route::get('remove/{id}','CartController@remove')->name('cart.remove');
	route::get('update/{id}/{quantity}','CartController@update')->name('cart.update');
	route::get('clear','CartController@clear')->name('cart.clear');
});	
// route::get('search','ProductController@search')->name('search');
route::get('search','PageHomeController@search')->name('search');
route::get('timkiem','ProductController@search')->name('timkiem');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'AdminController@getLogin']);

Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'AdminController@getLogout']);

// Route::group(['middleware' => 'CheckAdmin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
// 	Route::get('/', function() {
// 		return view('index');
// 	});
	

	
// });
Route::get('admin/profile', function () {
      echo "hh";
})->middleware('CheckAdmin');


Route::get('checkoutconfirm/{id}','PageHomeController@checkoutconfirm')->name('checkoutconfirm');
Route::get('checkout','PageHomeController@checkout')->name('checkout');
Route::get('ph','PageHomeController@show')->name('ph');
