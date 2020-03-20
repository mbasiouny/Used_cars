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
// front end ------------------
Route::get('/','HomeController@index');




//backend-------------------


Auth::routes();

// put all route here for routes
Route::group(['middleware' => ['auth']], function () {
    //defuallt
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin','AdminController@index');
    Route::get('/dash','AdminController@show_dashboard')->name('dash');
    Route::get('add','AdminController@add_car');
    Route::post('add','AdminController@add_car');

});