<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThingController;
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


Route::get('/', 'App\Http\Controllers\HomeController@index' );

Route::get('/home', function () {
    return view('tasks');
});

Route::get('/gifts', function () {
    return view('gifts');
});




Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {
    Route::get('/things','ThingController@index')->name('thing.index');
    Route::get('/things/create', 'ThingController@create')->name('thing.create');
    Route::post('/things', 'ThingController@store')->name('thing.store');
    Route::get('/things/{thing}','ThingController@show')->name('thing.show');
    Route::get('/things/{thing}/edit', 'ThingController@edit')->name('thing.edit');
    Route::patch('/things/{thing}', 'ThingController@update')->name('thing.update');
    Route::delete('/things/{thing}', 'ThingController@delete')->name('thing.delete');
});

Route::group(['namespace' => 'App\Http\Controllers', 'middleware' => 'auth'], function () {
    Route::get('/places','PlaceController@index')->name('place.index');
    Route::get('/places/create', 'PlaceController@create')->name('place.create');
    Route::post('/places', 'PlaceController@store')->name('place.store');
    Route::get('/places/{place}','PlaceController@show')->name('place.show');
    Route::get('/places/{place}/edit', 'PlaceController@edit')->name('place.edit');
    Route::patch('/places/{place}', 'PlaceController@update')->name('place.update');
    Route::delete('/places/{place}', 'PlaceController@delete')->name('place.delete');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
