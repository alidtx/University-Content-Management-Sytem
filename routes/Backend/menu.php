<?php

Route::get('/view', 'Menu\MenuController@index')->name('menu');
Route::get('/add', 'Menu\MenuController@add')->name('menu.add');
Route::post('/store', 'Menu\MenuController@store')->name('menu.store');
Route::get('/edit/{id}', 'Menu\MenuController@edit')->name('menu.edit');
Route::post('/update/{id}','Menu\MenuController@update')->name('menu.update');
Route::get('/subparent','Menu\MenuController@getSubParent')->name('menu.getajaxsubparent');

Route::get('/icon','Menu\MenuIconController@index')->name('menu.icon');
Route::post('icon/store','Menu\MenuIconController@store')->name('menu.icon.store');
Route::get('icon/edit','Menu\MenuIconController@edit')->name('menu.icon.edit');
Route::post('icon/update/{id}','Menu\MenuIconController@update')->name('menu.icon.update');
Route::post('icon/delete','Menu\MenuIconController@delete')->name('menu.icon.delete');

Route::get('/view-home-link', 'Menu\MenuController@viewHomeLink')->name('home_link');
Route::get('/add-home-link', 'Menu\MenuController@addHomeLink')->name('home_link.add');
Route::post('/store-home-link', 'Menu\MenuController@storeHomeLink')->name('home_link.store');
Route::get('/edit-home-link/{id}', 'Menu\MenuController@editHomeLink')->name('home_link.edit');
Route::post('/update-home-link/{id}','Menu\MenuController@updateHomeLink')->name('home_link.update');
Route::post('/delete-home-link','Menu\MenuController@deleteHomeLink')->name('home_link.delete');
