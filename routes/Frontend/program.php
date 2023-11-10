<?php

// Start - Program Frontend
Route::get('/all-programs', 'FrontController@allPrograms')->name('all-programs');
Route::get('/program_info', 'FrontController@program_info')->name('program_info');
Route::get('/allr', 'FrontController@allr')->name('allr');
Route::get('/program-details/{id}','FrontController@programDetails')->name('program-details');
// End - Program Frontend

Route::post('/programs-search', 'FrontController@ProgramSearch')->name('program_search');

//Start - Course Route
Route::get('/all-courses', 'FrontController@allCourses')->name('all-courses');
//End - Course Route

