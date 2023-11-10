<?php

// University Transport

Route::get('/route_list', 'TransportController@index')->name('transport.list');
Route::get('/route_create', 'TransportController@create')->name('transport.create');
Route::post('/route_store', 'TransportController@store')->name('transport.store');
Route::get('/route_edit/{id}', 'TransportController@edit')->name('transport.edit');
Route::post('/route_update/{id}', 'TransportController@update')->name('transport.update');
Route::get('/route_delete/{id}', 'TransportController@delete')->name('transport.delete');

// Transport Time

Route::get('/route_time/{id}', 'RouteTimeController@index')->name('route.time.list');
Route::get('/route_time_create/{id}', 'RouteTimeController@create')->name('route.time.create');
Route::post('/route_time_store', 'RouteTimeController@store')->name('route.time.store');
Route::get('/route_time_edit/{id}', 'RouteTimeController@edit')->name('route.time.edit');
Route::post('/route_time_update/{id}', 'RouteTimeController@update')->name('route.time.update');
Route::get('/route_time_delete/{id}', 'RouteTimeController@delete')->name('route.time.delete');