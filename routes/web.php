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

Auth::routes();

Route::group(['middleware'=>['web','auth']], function()
{
	Route::get('/home', 'UserController@index');
	Route::get('welcome',function(){
		if (Auth::user()->admin==1) {
			return view('admin.login');
		}else{
			return view('/admin/home');
		}
	});
});

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
   Route::get('/login',
   'Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
   Route::get('/home', 'PresensiController@index')->name('admin.dashboard');
	Route::post('presensi', 'PresensiController@store');
	Route::get('/presensi/{id}/edit', 'PresensiController@edit');
	Route::put('/presensi/{id}', 'PresensiController@update');
	Route::delete('/presensi/{id}', 'PresensiController@destroy');
	Route::get('/presensi/show', 'PresensiController@show');
	Route::post('/presensi/upload', 'PresensiController@upload');
	Route::get('/presensi/grafik', 'PresensiController@grafik');
	Route::get('/presensi/cuti'  , 'PresensiController@cuti');
	Route::post('/category', 'PresensiController@category');
	Route::get('/cuti/{id}/edit', 'PresensiController@editcuti');
	Route::put('/cuti/{id}', 'PresensiController@updatecuti');

  });

Route::get('/formcuti', 'UserController@create');
Route::post('cuti', 'UserController@store');