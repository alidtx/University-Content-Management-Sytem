<?php

Route::get('/', 'HallController@index')->name('manage_hall');
Route::get('/add', 'HallController@add')->name('manage_hall.add');
Route::post('/store', 'HallController@store')->name('manage_hall.store');
Route::get('/edit/{id}', 'HallController@edit')->name('manage_hall.edit');
Route::post('/update/{id}', 'HallController@update')->name('manage_hall.update');
Route::get('/delete', 'HallController@delete')->name('manage_hall.delete');


Route::get('/view_hall_member/{id}','HallMemberController@viewHallMember')->name('view_hall_member')->where('id', '[0-9]+');
Route::get('/hall_member/{id}', 'HallMemberController@add')->name('hall_member');
Route::post('/hall_member/manage_hall_member/store', 'HallMemberController@hallmemberStore')->name('manage_hall_member.store');
Route::get('/member_edit/{id}/{member_id}', 'HallMemberController@editMember')->name('member_edit');
Route::post('/member_update/{id}', 'HallMemberController@memberUpdate')->name('member_update');
Route::get('/member_delete','HallMemberController@memberDelete')->name('member_delete');

Route::get('/member_wise_hall','HallMemberController@memberWiseHall')->name('member_wise_hall');

Route::get('/hall_home/add/{hall_id}', 'HallHomeController@add')->name('manage_hall_home.add');
Route::post('/hall_home/store', 'HallHomeController@store')->name('manage_hall_home.store');
Route::get('/hall_home/edit/{hall_id}/{id}', 'HallHomeController@edit')->name('manage_hall_home.edit');
Route::post('/hall_home/update/{id}', 'HallHomeController@update')->name('manage_hall_home.update');
Route::get('/hall_home/delete', 'HallHomeController@delete')->name('manage_hall_home.delete');
Route::get('/hall_home/{hall_id}', 'HallHomeController@index')->name('manage_hall_home');
