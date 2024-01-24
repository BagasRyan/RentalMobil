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

// Route::get('/', function () {
//     return view('welcome');
// });

//Auth Controller
Route::get('/register', 'AuthController@registerView')->name('register');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');
Route::post('/loginStore', 'AuthController@loginStore')->name('login.store');
Route::post('/registerStore', 'AuthController@registerStore')->name('register.store');

// Rent Controller
Route::get('/', 'RentController@index')->name('dashboard')->middleware('auth');
Route::get('/create', 'RentController@create')->name('create')->middleware('auth');
Route::post('/rentStore', 'RentController@rentStore')->name('rent.store')->middleware('auth');
Route::get('/detail/{id}','RentController@detail')->name('detail')->middleware('auth');
Route::get('/profil', 'RentController@profil')->name('profile')->middleware('auth');
Route::get('/rent/{id}', 'RentController@rented')->name('rented.view')->middleware('auth');
Route::post('/rented', 'RentController@rentedStore')->name('rented.store')->middleware('auth');
Route::get('/myRentCar', 'RentController@myRentCar')->name('my.rent.car')->middleware('auth');
Route::get('/myCar', 'RentController@myCar')->name('my.car')->middleware('auth');
Route::get('/delete/{id}', 'RentController@delete')->name('delete')->middleware('auth');
