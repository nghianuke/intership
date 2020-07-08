<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
// home
Route::get('/','HandlingController@index')->name('home');

// cart
Route::get('cart', 'CartController@index');
Route::get('addcart/{id}', 'CartController@addCart');
Route::get('delcart/{id}','CartController@delete')->name('delcart');
Route::get('delallcart','CartController@deleteall')->name('delallcart');
Route::post('setquantity','CartController@setquantity')->name('setquantity');
// Client
Route::get('more_product','HandlingController@more_product')->name('more_product');
Route::get('product_detail/{id}','HandlingController@productDetail')->name('detail');
Route::get('faq','HandlingController@faq')->name('faq');
Route::get('about_us','HandlingController@about_us')->name('about_us');
Route::get('feedback_us','HandlingController@feedback')->name('feedback_us');
Route::get('news','HandlingController@new')->name('new');
Route::get('new_detail/{id}','HandlingController@new_detail')->name('new_detail');
Route::get('productincate/{id}','HandlingController@ProductInCategory')->name('productincate');
Route::get('authorinproduct/{name}','HandlingController@AuthorInProduct')->name('authorinproduct');
Route::get('search','HandlingController@search')->name('search');
Route::resource('feedback','FeedbackController');
// Route danh cho admin
Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function(){

	Route::get('/','HandlingController@admin')->name('admin');
	Route::resource('category','CategoryController');
	Route::resource('new','NewController');
	Route::get('newShow/{id}','NewController@newShow')->name('showNew');
	Route::resource('vote','VoteController');
	Route::resource('product','ProductController');
	Route::resource('tag','TagController');
	Route::resource('product_tag','ProductTagController');
	Route::get('productintag/{id}','ProductController@productintag')->name('showpostIntag');
	Route::resource('order','OrderController');
	Route::resource('user','UserController');

});
//Route client dung auth
Route::group(array('middleware' => 'auth'), function(){
	Route::get('checkout','CartController@checkout')->name('checkout');
	Route::get('logout','HandlingController@logout');
	Route::get('profile','HandlingController@profile')->name('profile');
	Route::get('order_detail/{id}','HandlingController@order_detail')->name('order_detail');
	Route::get('address','HandlingController@address')->name('address');
	Route::post('address','AddressController@store');
	Route::put('address/{id}','AddressController@update');
});
