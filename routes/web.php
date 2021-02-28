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

Route::get('/','FrontController@home');
Route::get('image/{id}/{w}/{h}','MediaController@optimize');
Route::get('image/{id}/{w}/{h}/{p}','MediaController@optimize');
Route::post('send','MailController@send');
Route::get('work/{id}','WorkController@front_get');
Route::get('download/{id}','dowloandController@front_get');
/**
 * ADMIN AREA
 */
Auth::routes();
Route::post('upload/{id}','MediaController@upload');
Route::delete('upload/{id}/{id_work}','MediaController@delete');
Route::prefix('admin')->group(function () {
    Route::get('/','HomeController@index');

    Route::resource('config','SettingController');
    Route::resource('categorie','CategorieController');
    Route::resource('work','WorkController');
    Route::resource('download','dowloandController');
    Route::get('work/{id}/image','WorkController@images');
    Route::get('download/{id}/image','dowloandController@images');
    Route::get('logout','Auth\LoginController@logout');


});
