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

Route::get('/', function () {
	return view('welcome');
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/temp', 'HomeController@temp')->name('temp');
Route::get('/sodigaz', 'FleetController@sodigaz')->name('sodigaz');
Route::get('/overview', 'FleetController@overview')->name('overview');
Route::get('/realtime', 'FleetController@realtime')->name('realtime');

// //Route::get('/adminDash','Admin\UsersController@adminDash');

//  Route::get('/adminDash',function(){
// 	return view('admin.users.adminDash');
// }); 

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users', 'UsersController');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-companies')->group(function(){
	Route::resource('/companies', 'CompaniesController');
});

Route::prefix('vehicle')->name('vehicle.')->middleware('can:manage-vehicles')->group(function(){
	Route::resource('/vehicles', 'VehiclesController');
});

Route::prefix('loading')->name('loading.')->middleware('can:manage-users')->group(function(){
	Route::resource('/loadings', 'LoadingsController');
});

Route::prefix('delivery')->name('delivery.')->middleware('can:manage-users')->group(function(){
	Route::resource('/deliveries', 'DeliveriesController');
});

//Route::get('/addDelivery/{loading}','LoadingsController@addDeliveryToLoading');
Route::get('/addDelivery','LoadingsController@addDelivery');

