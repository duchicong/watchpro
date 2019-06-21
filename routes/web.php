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
// admin

include 'admin.php';

// Quan lý trong backend
// login and logout
Route::get('slide','PagesController@slide');
Route::get('dang-nhap',[
  'as'  => 'userlogin',
  'uses' =>'UserController@getLogin'
]);

Route::post('dang-nhap', [
  'as'  => 'postuserlogin', 
  'uses' =>'UserController@postlogin'
]);

Route::get('dang-ky',[
  'as'  => 'userregister',
  'uses' =>'UserController@getregister'
]);

Route::post('dang-ky', [
  'as'  => 'postregister', 
  'uses' =>'UserController@postregister'
]);

Route::get('dang-xuat',[
  'as'=>'userlogout',
  'uses'=>'UserController@getUsertLogout'
]);

Route::get('quen-mat-khau',[
	'as'	=> 'forgetpassword',
	'uses'	=> 'UserController@getforgetpassword'
]);
Route::post('quen-mat-khau',[
	'as'	=> 'postforgetpassword',
	'uses'	=> 'UserController@postforgetpassword'
]);
Route::get('lay-lai-mat-khau/{token}',[
	'as'	=> 'resetpassword',
	'uses'	=> 'UserController@getresetpassword'
]);
Route::post('lay-lai-mat-khau/{token}',[
	'as'	=> 'postresetpassword',
	'uses'	=> 'UserController@postresetpassword'
]);


Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@index']);

// for shops
Route::get('dong-ho-nam',[
	'as'	=> 'getcatenam',
	'uses'	=> 'ShopController@getcatenam'
]);
Route::get('dong-ho-nu',[
	'as'	=> 'getcatenu',
	'uses'	=> 'ShopController@getcatenu'
]);

//Cap nhat gio hang
Route::group(['prefix'=>'gio-hang'], function() {
	Route::get('addcart/{id}', ['as'  => 'getcartadd', 'uses' =>'ShopController@addcart']);
	Route::get('chi-tiet',['as'	=> 'getviewcart','uses'	=> 'ShopController@viewcart']);
	Route::get('update/{id}/{qty}-{dk}', ['as'  => 'getupdatecart', 'uses' =>'ShopController@getupdatecart']);
	Route::get('delete/{id}', ['as'  => 'getdeletecart', 'uses' =>'ShopController@getdeletecart']);
	Route::get('xoa',['as' => 'delcart', 'uses' => 'ShopController@delcart']);
});
// Order
Route::get('dat-hang', ['as'  => 'getoder', 'uses' =>'ShopController@getoder']);
Route::post('dat-hang', ['as'  => 'postoder', 'uses' =>'ShopController@postoder']);
Route::get('thong-tin-mua-hang',[
	'as'	=> 'getinfoorder',
	'uses'	=> 'ShopController@getinfoorder'
]);

// user: info person of customer
Route::get('user',[
	'as' => 'thongtinuser',
	'uses' => 'PagesController@showuser'
]);
Route::get('user/edit/{id}', 'PagesController@editUser');
Route::post('user/edit/{id}',[
	'as'	=> 'capnhapthongtin',
	'uses'	=> 'PagesController@postUser'
]);

// for blogs
Route::get('tin-tuc/{postlink?}',[
	'as'	=> 'postlink',
	'uses'	=> 'PagesController@postlink'
]);
Route::get('page/{pagelink}',
	['as'=>'detailblog','uses'	=> 'PagesController@pagelink'
]);
// tìm kiếm cho sản phẩm
Route::get('search', ['as' => 'searchpro', 'uses' => 'PagesController@searchpro' ]);
//search url haven't on website
Route::get('error-404',[
	'as'=>'error503', 
	'uses'	=> 'PagesController@error503'
]);
Route::get('/{cate?}/{product?}',[
	'as'	=> 'check_slug',
	'uses'	=> 'PagesController@checkslug'
]);

