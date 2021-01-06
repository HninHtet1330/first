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

Route::get('/','MoviePageController@home');
Route::get('/detail/{id}','MoviePageController@detail');
Route::get('/about_us','MoviePageController@aboutUs');
Route::get('/contact_us','MoviePageController@contactUs');   
Route::post('/save_contact_us','MoviePageController@saveContactUs');  
Route::prefix('admin')->group(function(){
      Route::get('/',function(){
            return view('admin.admin_home');
      });
      Route::get('category/index','CategoryController@index');
      Route::get('actor/index','ActorController@index');
      Route::get('actor/create','ActorController@create');
      Route::post('actor/store','ActorController@store');
      Route::get('actor/edit/{id}','ActorController@edit');
      Route::post('actor/update/{id}','ActorController@update');
      Route::get('actor/delete/{id}','ActorController@delete');
      Route::get('actor/show/{id}','ActorController@show');

      Route::resource('director','DirectorController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
