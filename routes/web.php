<?php

use Illuminate\Support\Facades\Route;
use App\NewsController;

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
    return view('smile.website');
});

Auth::routes();

//Route::POST('logout', 'Auth\AuthController@getLogout');

//Route::post('logout', 'LoginController@logout');


Route::get('/services', 'WebsiteController@services')->name('services');
Route::get('/media', 'WebsiteController@media')->name('media');
Route::get('/careers', 'WebsiteController@careers')->name('careers');
Route::get('/aboutus', 'WebsiteController@aboutus')->name('aboutus');
Route::get('/contactus', 'WebsiteController@contactus')->name('contactus');
Route::get('/home_main', 'WebsiteController@home_main')->name('home_main');
Route::get('/nigeria', 'WebsiteController@nigeria')->name('nigeria');
Route::get('/uganda', 'WebsiteController@uganda')->name('uganda');
Route::get('/tanzania', 'WebsiteController@tanzania')->name('tanzania');
Route::get('/brc', 'WebsiteController@brc')->name('brc');
Route::get('/career_details', 'WebsiteController@careerdetails')->name('career_details');
Route::get('/home_main', 'WebsiteController@home_main')->name('home_main');








Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('user_list', 'UserController@show')->name('user_list');
    Route::get('user_add', 'UserController@add')->name('user_add');
    Route::POST('user_create', 'UserController@create')->name('user_create');
    Route::get('user_edit/{id}', 'UserController@edit');
    Route::POST('user_update', 'UserController@update')->name('user_update');
    
    Route::get('news_list', 'NewsController@show')->name('news_list');
    Route::get('news_add', 'NewsController@add')->name('news_add');
    Route::POST('news_create', 'NewsController@create')->name('news_create');
    Route::get('news_edit/{id}', 'NewsController@edit');
    Route::POST('news_update', 'NewsController@update')->name('news_update');
    Route::get('news_delete/{id}','NewsController@delete')->name('news_delete');
    
    
    Route::post('carrer_list', 'CarrerController@carrer_list')->name('carrer_list');
    Route::post('carrer_create', 'CarrerController@carrer_create')->name('carrer_create');
    Route::get('carrer_add', 'CarrerController@add')->name('carrer_add');
    Route::get('carrer_edit/{id}', 'CarrerController@edit');
    Route::POST('carrer_update', 'CarrerController@update')->name('carrer_update');
    Route::get('car_delete/{id}','CarrerController@delete')->name('car_delete');    
});



