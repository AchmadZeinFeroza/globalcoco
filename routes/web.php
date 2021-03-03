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


/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/
Route::get('/', 'WebsiteController@index');
Route::get('/about', 'WebsiteController@about');
Route::get('/product' , 'WebsiteController@product'); 
Route::get('/contact' , 'WebsiteController@contact'); 
Route::get('/team' , 'WebsiteController@team'); 
Route::get('/product/{id}' , 'WebsiteController@showproduct'); 

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/
Auth::routes();
Route::group(['middleware' => ['auth']] , function(){
    // Home
    Route::resource('thumbnail', 'ThumbnailController');
    Route::get('/abouthome', 'AboutController@home');
    Route::get('/service' , 'WebsiteController@service'); 
    Route::get('/benefit' , 'WebsiteController@benefit'); 
    Route::get('/gallery', 'WebsiteController@gallery');
    Route::match(['post' , 'patch'],'/abouthome/update', 'AboutController@updatehome');
Route::match(['post' , 'patch'],'/service/update/{service}', 'WebsiteController@updateservice');
Route::match(['post' , 'patch'],'/benefit/update/{id}', 'WebsiteController@updatebenefit');

//About
Route::get('/aboutadmin', 'AboutController@index');
Route::match(['post' , 'patch'],'/about/update/{id}', 'AboutController@update');

//Product
Route::get('/productadmin', 'ProductController@index');
Route::get('/rempahadmin', 'ProductController@rempah');
Route::get('/productadmin/create', 'ProductController@create');
Route::post('/rempahadmin/upload', 'ProductController@createrempah');
Route::post('/productadmin/store', 'ProductController@store');
Route::match(['post' , 'patch'],'/product/update/{id}', 'ProductController@update');
Route::delete('/product/delete/{id}', 'ProductController@destroy');
Route::delete('/rempahadmin/delete/{id}', 'ProductController@deleterempah');

//Team
Route::get('/teamadmin', 'TeamController@index');
Route::get('/teamadmin/create', 'TeamController@create');
Route::post('/teamadmin/store', 'TeamController@store');
Route::match(['post' , 'patch'],'/team/update/{id}', 'TeamController@update');
Route::delete('/team/delete/{id}', 'TeamController@destroy');

//Contact
Route::get('/contactadmin' , 'WebsiteController@contactadmin'); 
Route::match(['post' , 'patch'],'/contact/update', 'WebsiteController@updatecontact');

//Clients
Route::get('/clientsadmin' , 'WebsiteController@clientsadmin'); 
Route::get('/clientsadmin/create' , 'WebsiteController@create'); 
Route::post('/clientsadmin/store' , 'WebsiteController@store'); 
Route::match(['post' , 'patch'],'/clients/update/{clients}', 'WebsiteController@updateclients');

//Gallery
Route::get('/galleryadmin', 'ThumbnailController@galleryadmin');
Route::post('/galleryadmin/creategallery    ', 'ProductController@createGallery');
Route::delete('/galleryadmin/delete/{id}', 'ProductController@delete');
//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

