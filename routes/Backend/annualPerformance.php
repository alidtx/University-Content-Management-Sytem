<?php
// Annual Performance
Route::get('/performance/view', 'PerformanceController@index')->name('annual-performance.performance.list');
Route::get('/performance/add', 'PerformanceController@create')->name('annual-performance.performance.create');
Route::post('/performance/store', 'PerformanceController@store')->name('annual-performance.performance.store');
Route::get('/performance/edit/{id}','PerformanceController@edit')->name('annual-performance.performance.edit');
Route::post('/performance/update/{id}','PerformanceController@update')->name('annual-performance.performance.update');
Route::get('/performance/delete/{id}', 'PerformanceController@destroy')->name('annual-performance.performance.destroy');

Route::get('/report/view', 'AnnualreportController@index')->name('annual-performance.report.list');
Route::get('/report/add', 'AnnualreportController@create')->name('annual-performance.report.create');
Route::post('/report/store', 'AnnualreportController@store')->name('annual-performance.report.store');
Route::get('/report/edit/{id}','AnnualreportController@edit')->name('annual-performance.report.edit');
Route::post('/report/update/{id}','AnnualreportController@update')->name('annual-performance.report.update');
Route::get('/report/delete/{id}', 'AnnualreportController@destroy')->name('annual-performance.report.destroy');
