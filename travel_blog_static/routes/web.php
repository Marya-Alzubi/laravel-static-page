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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/aboutUs', 'aboutUsController@aboutUs');
Route::get('/contactUs', 'contactUsController@contactUs');
Route::get('/passingData', "contactUsController@passingData");


//udemy
Route::get('/contact', 'contactUsController@udemy');
Route::resource("posts", "crudController");

