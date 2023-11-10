<?php

use Illuminate\Http\Request;

Route::group([

    'middleware' => 'api',
    // 'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// Route::middleware(['auth:api'])->group(function(){
Route::get('about', 'Backend\AboutController@index')->name('site-setting.about');
Route::get('member-list-api', 'ApiController@memberListApi')->name('member_list_api');
Route::get('faculty-list-api', 'ApiController@facultyListApi')->name('faculty_list_api');
Route::get('department-list-api', 'ApiController@departmentListApi')->name('department_list_api');
Route::get('office-list-api', 'ApiController@officeListApi')->name('office_list_api');



Route::get('latest-news', 'ApiController@latestNews')->name('latest_news');


// });


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/transport-show-api', 'ApiController@showTransport')->name('transport.index');
// Route::get('/transport-show/{id?}', 'ApiController@showTransport')->name('transport.show');
