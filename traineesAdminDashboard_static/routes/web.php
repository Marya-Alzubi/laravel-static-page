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

Route::get('/','traineesController@dashboardPage');

Route::get('/trainees', 'traineesController@traineesPage');

// shatnawi way
// Route::get('/singleTrainee', 'traineesController@singleTraineePage');
Route::get('/singleTrainee/{id}', 'traineesController@singleTraineePage');

Route::get('/attendanceReport', 'traineesController@attendanceReportPage');

Route::get('/projectsSummery', 'traineesController@projectsSummeryPage');

Route::get('/gallery', 'traineesController@galleryPage');



// registration [20-dec-2020]
Route::get('/registration', function(){
    return view("/registration");
});

Route::post("/input_table","userController@register");

