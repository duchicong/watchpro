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
    return view('welcome');
});

Route::get('admin/login',[
	'as'  => 'dangnhap',
	'uses' =>'Auth\LoginController@getLogin'
]);

Route::post('admin/login', [
	'as'  => 'dangnhap', 
	'uses' =>'Auth\LoginController@postlogin'
]);

Route::get('admin/signin',[
	'as'  => 'dangki',
	'uses' =>'Auth\RegisterController@getSignin'
]);

Route::post('admin/signin', [
	'as'  => 'dangki', 
	'uses' =>'Auth\RegisterController@postSignin'
]);

Route::get('admin/logout',[
	'as'=>'dangxuat',
	'uses'=>'adminController@getLogout'
]);


Route::group(['prefix'=>'admin'], function() {
	
	Route::get('/trang-chu', function() {

     return view('back-end.home');

   	})->name('home');

	// quan ly danh muc
	Route::group(['prefix'=>'danh-muc-loai-san-pham'], function(){

		Route::get('/add',[
			'as'=>'getaddcatpro',
			'uses' => 'categoryController@getadd'
		]);

		Route::post('/add',[
			'as'=>'postaddcat',
			'uses' => 'categoryController@postadd'
		]);

		Route::get('/',[
			'as'=>'getcate',
			'uses' => 'categoryController@getlist'
		]);

		Route::get('/del/{id}',[
			'as'=>'getdellcat',
			'uses' => 'categoryController@getdel'
		])->where('id','[0-9]+');

		Route::get('/edit/{id}',[
			'as'  =>'geteditcatpro',
			'uses' => 'categoryController@getedit'
		])->where('id','[0-9]+');

		Route::post('/edit/{id}',[
			'as' =>'posteditcatpro',
			'uses' => 'categoryController@posteditcatpro'
		])->where('id','[0-9]+');

	});

	// quan ly san pham

	Route::group(['prefix'=>'san-pham'], function(){

		 Route::get('/add',[
		 	'as'=>'getaddpro',
		 	'uses' => 'productController@getadd'
		 ]);

		 Route::post('/add',[
		 	'as'=>'postaddpro',
		 	'uses' => 'productController@postadd'
		 ]);

		 Route::get('/',[
		 	'as'=>'getpro',
		 	'uses' => 'productController@getlist'
		 ]);
		 
		 Route::get('del/{id}',[
		 	'as'=>'getdellpro',
		 	'uses' => 'productController@getdel'
		 ])->where('id','[0-9]+');
		           
		 Route::get('edit/{id}',[
		 	'as'=>'geteditpro',
		 	'uses' => 'productController@getedit'
		 ])->where('id','[0-9]+');
		 
		 Route::post('edit/{id}',[
		 	'as' =>'posteditpro',
		 	'uses' => 'productController@postedit'
		 ])->where('id','[0-9]+');

		 
		Route::get('tim-kiem',[
			'as' =>'timkiem',
			'uses' => 'productController@getSearch'
		]);	
	});
	// quan ly tin tuc
	Route::group(['prefix'=>'danh-muc-blog'], function(){
		Route::get('/', [
			'as' => 'getlistcat',
			'uses' => 'BlogCateController@index'
		]);
		Route::get('add',[
			'as'        =>'getaddcat',
			'uses' => 'BlogCateController@AddCate'
		]);
		Route::post('add',[
			'as'   =>'getpostcat',
			'uses' => 'BlogCateController@postadd'
		]);
		Route::get('del/{id}',[
			'as'   =>'getdelcat',
			'uses' => 'BlogCateController@delcate'
		])->where('id','[0-9]+');
        Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'BlogCateController@getedit'])->where('id','[0-9]+');
        Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'BlogCateController@postedit'])->where('id','[0-9]+');
	});
	Route::group(['prefix'=>'blog'], function(){

		Route::get('/',[
			'as' => 'getblog',
			'uses' => 'BlogController@index'
		]);

		Route::get('add',[
			'as'	=> 'getaddblog',
			'uses'	=> 'BlogController@addblog'
		]);

		Route::post('add',[
			'as'	=> 'getpostblog',
			'uses'	=> 'BlogController@postblog'
		]);

		Route::get('edit/{id}',[
			'as'	=> 'geteditblog',
			'uses'	=> 'BlogController@editblog'
		])->where('id','[0-9]+');

		Route::post('edit/{id}',[
			'as'	=> 'postedit',
			'uses'	=> 'BlogController@postedit'
		])->where('id','[0-9]+');

		Route::get('del/{id}',[
			'as'	=> 'delblog',
			'uses'	=> 'BlogController@delblog'
		]);
	});
	Route::group(['prefix'=>'slider'], function(){
		Route::get('/',[
			'as'	=> 'getslide',
			'uses'	=> 'SliderController@index'
		]);

		Route::get('add',[
			'as'	=> 'getaddslide',
			'uses'	=> 'SliderController@addslide'
		]);

		Route::post('add',[
			'as'	=> 'postslide',
			'uses'	=> 'SliderController@postslide'
		]);

		Route::get('edit/{id}',[
			'as'	=> 'geteditslide',
			'uses'	=> 'SliderController@editslide'
		])->where('id','[0-9]+');

		Route::post('edit/{id}',[
			'as'	=> 'posteditslide',
			'uses'	=> 'SliderController@posteditslide'
		])->where('id','[0-9]+');

		Route::get('del/{id}',[
			'as'	=> 'delslide',
			'uses'	=> 'SliderController@delslide'
		]);
	});
	// quan ly đơn đặt hàng
        Route::group(['prefix' => 'don-hang'], function() {;

           Route::get('/',[
           	'as' =>'getorder',
           	'uses' => 'orderController@getlist'
           ]);

           Route::get('del/{id}',[
           	'as'   =>'getdeloder',
           	'uses' => 'orderController@getdel'
           ])->where('id','[0-9]+');
           
           Route::get('detail/{id}',[
           	'as'  =>'getdetail',
           	'uses' => 'orderController@getdetail'
           ])->where('id','[0-9]+');

           Route::post('detail/{id}',[
           	'as' =>'postdetail',
           	'uses' => 'orderController@postdetail'
           ])->where('id','[0-9]+');
      });
      	//quan ly thong tin khach hang
      	    
      	Route::group(['prefix' => 'khach-hang'], function() {;

           Route::get('/',[
           	'as'       =>'getcs',
           	'uses' => 'KhachhangController@getlist'
           ]);

           Route::get('del/{id}',[
           	'as'   =>'getdelcs',
           	'uses' => 'KhachhangController@getdel'
           ])->where('id','[0-9]+');
           
           Route::get('edit/{id}',[
           	'as'  =>'geteditcs',
           	'uses' => 'KhachhangController@getedit'
           ])->where('id','[0-9]+');

           Route::post('edit/{id}',[
           	'as' =>'posteditcs',
           	'uses' => 'KhachhangController@postedit'
           ])->where('id','[0-9]+');
      });
       //  quan ly thong nhan vien

        Route::group(['prefix' => 'nhan-vien'], function() {;

           Route::get('/',[
           	'as'       =>'getnv',
           	'uses' => 'AdminuserController@getlist'
           ]);

            Route::get('add',[
			 	'as'=>'getaddmem',
			 	'uses' => 'AdminuserController@getadd'
		 	]);

            Route::post('add',[
			 	'as'=>'postaddmem',
			 	'uses' => 'AdminuserController@postadd'
		 	]);

           Route::get('del/{id}',[
           	'as'   =>'getdelnv',
           	'uses' => 'AdminuserController@getdel'
           ])->where('id','[0-9]+');
           
           Route::get('edit/{id}',[
           	'as'  =>'geteditnv',
           	'uses' => 'AdminuserController@getedit'
           ])->where('id','[0-9]+');

           Route::post('edit/{id}',[
           	'as' =>'posteditnv',
           	'uses' => 'AdminuserController@postedit'
           ])->where('id','[0-9]+');
      });

}); 
