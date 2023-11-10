<?php

//Post
Route::get('/post/view', 'Post\PostController@view')->name('frontend-menu.post.view');
Route::get('/post/add','Post\PostController@add')->name('frontend-menu.post.add');
Route::post('/post/store','Post\PostController@store')->name('frontend-menu.post.store');
Route::get('/post/edit/{id}','Post\PostController@edit')->name('frontend-menu.post.edit');
Route::post('/post/update/{id}','Post\PostController@update')->name('frontend-menu.post.update');
Route::get('/post/delete', 'Post\PostController@destroy')->name('frontend-menu.post.destroy');

//Frontend Menu
Route::get('/menu/view', 'Post\FrontendMenuController@view')->name('frontend-menu.menu.view');
Route::get('/menu/course', 'Post\FrontendMenuController@getCourse')->name('frontend-menu.menu.course');
Route::get('/menu/add','Post\FrontendMenuController@add')->name('frontend-menu.menu.add');
Route::post('/menu/single/store','Post\FrontendMenuController@singleStore')->name('frontend-menu.menu.single.store');
Route::post('/menu/store','Post\FrontendMenuController@store')->name('frontend-menu.menu.store');
Route::get('/menu/edit/{id}','Post\FrontendMenuController@edit')->name('frontend-menu.menu.edit');
Route::post('/menu/update/{id}','Post\FrontendMenuController@update')->name('frontend-menu.menu.update');
Route::get('/menu/delete', 'Post\FrontendMenuController@destroy')->name('frontend-menu.menu.destroy');

//Counter Box

Route::get('counter_box','CounterBoxController@index')->name('frontend-menu.counter_box');
Route::get('counter_box/add','CounterBoxController@addCounterBox')->name('frontend-menu.counter_box.add');
Route::post('counter_box/store','CounterBoxController@storeCounterBox')->name('frontend-menu.counter_box.store');
Route::get('counter_box/edit/{id}','CounterBoxController@editCounterBox')->name('frontend-menu.counter_box.edit');
Route::post('counter_box/update/{id}','CounterBoxController@updateCounterBox')->name('frontend-menu.counter_box.update');
Route::get('counter_box/delete','CounterBoxController@deleteCounterBox')->name('frontend-menu.counter_box.delete');

Route::post('counter_box/background/store','CounterBoxController@storeCounterBackground')->name('frontend-menu.counter_box.background.store');

//Ongoing Research

Route::get('ongoing_research','OngoingResearchController@index')->name('frontend-menu.ongoing_research');
Route::get('ongoing_research/add','OngoingResearchController@add')->name('frontend-menu.ongoing_research.add');
Route::post('ongoing_research/store','OngoingResearchController@store')->name('frontend-menu.ongoing_research.store');
Route::get('ongoing_research/edit/{id}','OngoingResearchController@edit')->name('frontend-menu.ongoing_research.edit');
Route::post('ongoing_research/update/{id}','OngoingResearchController@update')->name('frontend-menu.ongoing_research.update');
Route::get('ongoing_research/delete','OngoingResearchController@delete')->name('frontend-menu.ongoing_research.delete');

//Completed Research

Route::get('completed_research','CompletedResearchController@index')->name('frontend-menu.completed_research');
Route::get('completed_research/add','CompletedResearchController@add')->name('frontend-menu.completed_research.add');
Route::post('completed_research/store','CompletedResearchController@store')->name('frontend-menu.completed_research.store');
Route::get('completed_research/edit/{id}','CompletedResearchController@edit')->name('frontend-menu.completed_research.edit');
Route::post('completed_research/update/{id}','CompletedResearchController@update')->name('frontend-menu.completed_research.update');
Route::get('completed_research/delete','CompletedResearchController@delete')->name('frontend-menu.completed_research.delete');

//Op-ed

Route::get('oped','OpedController@index')->name('frontend-menu.oped');
Route::get('oped/add','OpedController@add')->name('frontend-menu.oped.add');
Route::post('oped/store','OpedController@store')->name('frontend-menu.oped.store');
Route::get('oped/edit/{id}','OpedController@edit')->name('frontend-menu.oped.edit');
Route::post('oped/update/{id}','OpedController@update')->name('frontend-menu.oped.update');
Route::get('oped/delete','OpedController@delete')->name('frontend-menu.oped.delete');

//Ongoing Training

Route::get('ongoing_training','OngoingTrainingController@index')->name('frontend-menu.ongoing_training');
Route::get('ongoing_training/add','OngoingTrainingController@add')->name('frontend-menu.ongoing_training.add');
Route::post('ongoing_training/store','OngoingTrainingController@store')->name('frontend-menu.ongoing_training.store');
Route::get('ongoing_training/edit/{id}','OngoingTrainingController@edit')->name('frontend-menu.ongoing_training.edit');
Route::post('ongoing_training/update/{id}','OngoingTrainingController@update')->name('frontend-menu.ongoing_training.update');
Route::get('ongoing_training/delete','OngoingTrainingController@delete')->name('frontend-menu.ongoing_training.delete');

//Upcoming Training

Route::get('upcoming_training','UpcomingTrainingController@index')->name('frontend-menu.upcoming_training');
Route::get('upcoming_training/add','UpcomingTrainingController@add')->name('frontend-menu.upcoming_training.add');
Route::post('upcoming_training/store','UpcomingTrainingController@store')->name('frontend-menu.upcoming_training.store');
Route::get('upcoming_training/edit/{id}','UpcomingTrainingController@edit')->name('frontend-menu.upcoming_training.edit');
Route::post('upcoming_training/update/{id}','UpcomingTrainingController@update')->name('frontend-menu.upcoming_training.update');
Route::get('upcoming_training/delete','UpcomingTrainingController@delete')->name('frontend-menu.upcoming_training.delete');

//Journal Paper

Route::get('journal-paper','JournalController@index')->name('frontend-menu.journal_paper');
Route::get('journal-paper/add','JournalController@add')->name('frontend-menu.journal_paper.add');
Route::post('journal-paper/store','JournalController@store')->name('frontend-menu.journal_paper.store');
Route::get('journal-paper/edit/{id}','JournalController@edit')->name('frontend-menu.journal_paper.edit');
Route::post('journal-paper/update/{id}','JournalController@update')->name('frontend-menu.journal_paper.update');
Route::get('journal-paper/delete','JournalController@delete')->name('frontend-menu.journal_paper.delete');