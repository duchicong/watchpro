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

Route::get('/', function () {
    return view('user.home');
});
Route::get('home',function(){
	return view('user.home');
});
Route::get('about',function(){
	return view('user.about');
});
Route::get('detailProduct',function(){
	return view('user.detailProduct');
});
Route::get('category',function(){
	return view('user.category');
});
Route::get('contact',function(){
	return view('user.contact');
});
Route::get('quantri',function(){
	return view('admin.index');
});