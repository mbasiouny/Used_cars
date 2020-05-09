<?php
//use RealRashid\SweetAlert\Facades\Alert;

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




//backend-------------------


Auth::routes();

// put all route here for routes
Route::get('/login','Auth\LoginController@getLogin')->name('get.login');
Route::post('/login','Auth\LoginController@postLogin')->name('login');
// still under Editing
Route::get('/register','Auth\RegisterController@getRegister')->name('get.register');
Route::post('/register','Auth\RegisterController@register')->name('register');
//
Route::group(['middleware' => ['auth']], function () {
    //Route for run the home page for the first time
    // Route::get('/home','HomeController@index');
    //defualt Route when route
    Route::get('/home', 'HomeController@index')->name('welcomePage');
    // route logout
    Route::get('/logout','SuperAdminController@logout')->name('admin.logout');
    Route::get('/',function(){
      return redirect('/home');
    });
    //End logout
    //route dashboard
	
    Route::get('/admin','AdminController@show_dashboard')->name('dashAdmin');
    Route::get('/add_category','CategoryController@index');
    Route::get('/all_categories','CategoryController@all_categories');
    Route::post('/save_categories','CategoryController@save_categories');
    Route::get('/in_active/{category_id}','CategoryController@in_active');
    Route::get('/active/{category_id}','CategoryController@active');
    //end dashboard

//for cars//
    Route::get('add','Cars_Controller@add_car');
    Route::post('add','Cars_Controller@add_car');
    Route::get('profile','Cars_Controller@user_profile');
// cars//

//chat


Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');


});
