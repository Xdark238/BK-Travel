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
    return view('/client/tours');
});


Auth::routes();

// Client
Route::get('tours', function(){
	return view('/client/tours');
});
Route::get('booktour', function(){
	return view('/client/booktour');
});
Route::get('detail', function(){
	return view('/client/detail');
});

// Admin
Route::group(['middleware' => ['auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/logout', 'HomeController@logout')->name('logout');

	Route::group(['prefix' => 'admin'], function(){
		Route::get('home', function(){
		return view('/admin/home');
		});
		Route::get('clients_management', function(){
			return view('/admin/clients_management');
		});
		Route::get('tours_management', function(){
			return view('/admin/tours_management');
		});
		Route::get('tours_management/create', function(){
			return view('/admin/create_tour');
		});
		Route::post('tours_management/create', function(){
			return view('/admin/create_tour');
		})->name('tour.store');
		Route::get('users_management', function(){
			return view('/admin/users_management');
		});
		Route::get('users_management/create', function(){
			return view('/admin/create_user');
		});
		Route::post('users_management/create', function(){
			return view('/admin/create_user');
		})->name('user.store');
		Route::get('users_management/detail/1', function(){
			return view('/admin/detail_user');
		});
	});
});



