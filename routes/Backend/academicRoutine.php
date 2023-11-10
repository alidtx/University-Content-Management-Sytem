<?php

// Academic Calendar Routine
Route::get('/routine-show', 'AcademiceventController@showCalendar')->name('academic-routine.event.showCalendar');
Route::get('/routine/list', 'AcademiceventController@index')->name('academic-routine.event.list');
Route::get('/routine/add', 'AcademiceventController@create')->name('academic-routine.event.create');
Route::post('/routine/store', 'AcademiceventController@store')->name('academic-routine.event.store');
Route::get('/routine/edit/{id}','AcademiceventController@edit')->name('academic-routine.event.edit');
Route::get('/routine/show/{id}','AcademiceventController@show')->name('academic-routine.event.show');

Route::post('/routine/update/{id}','AcademiceventController@update')->name('academic-routine.event.update');
Route::get('/routine/delete/{id}', 'AcademiceventController@destroy')->name('academic-routine.event.destroy');
