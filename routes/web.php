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

Route::get('test', function () {
	return view('site.product-detail');
});


// Route::get('/', 'ProductController@getProducts')->name('list');
// Route::get('admin/login', 'UserController@getLogin')->name('user-login');
// Route::post('admin/login-post', 'UserController@postLogin')->name('user-login-post');
// Route::post('admin', 'UserController@postLogin')->name('admin-page');

Route::group(
	['prefix' => '/', 'as' => 'product.'],
	function () {
		Route::get('/{id}', 'ProductController@getProductDetail')->name('product-detail');
	}
);

Route::group(
	['prefix' => 'admin', 'as' => 'admin.'],
	function () {
		Route::get('/', function(){
			return view('admin.index');
		});
	}
);

Route::group(
	['prefix' => 'admin/comments', 'as' => 'adcomments.'],
	function () {
		Route::get('/', 'CommentController@index')->name('list');
		Route::post('create-comment', 'CommentController@create')->name('create-comment');
		Route::get('{comment}/edit', 'CommentController@editForm')->name('edit');
		Route::post('update-comment', 'CommentController@update')->name('update');
		Route::get('delete-comment/{id}', 'CommentController@deleteComment')->name('remove'); 
	}
);

Route::group(
	['prefix' => 'admin/products', 'as' => 'adproducts.'],
	function () {
		Route::get('/', 'ProductController@index')->name('list');
		Route::get('add', 'ProductController@createForm')->name('add');
		Route::post('create-post', 'ProductController@create')->name('create-post');
		Route::get('{product}/edit', 'ProductController@editForm')->name('edit');
		Route::post('update-post', 'ProductController@update')->name('update');
		Route::get('deletePost/{id}', 'ProductController@deletePost')->name('remove');
	}
); 

Route::group(
	['prefix' => 'admin/categories', 'as' => 'adcategories.'],
	function () {
		Route::get('/', 'CategoryController@index')->name('list');
		Route::get('add', 'CategoryController@createForm')->name('add');
		Route::post('create-category', 'CategoryController@create')->name('create-category');
		Route::get('{category}/edit', 'CategoryController@editForm')->name('edit');
		Route::post('update-category', 'CategoryController@update')->name('update');
		Route::get('delete-category/{id}', 'CategoryController@delete')->name('remove');
	}
);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user-register', 'UserController@getRegister')->name('user-register-form');
Route::post('user-register-post', 'UserController@postRegister')->name('user-register-post');
