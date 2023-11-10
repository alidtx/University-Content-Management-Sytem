<?php

//Slider
Route::get('slider','LibrarySliderController@index')->name('library-management.slider');
Route::get('slider/add','LibrarySliderController@addSlider')->name('library-management.slider.add');
Route::post('slider/store','LibrarySliderController@storeSlider')->name('library-management.slider.store');
Route::get('slider/edit/{id}','LibrarySliderController@editSlider')->name('library-management.slider.edit');
Route::post('slider/update/{id}','LibrarySliderController@updateSlider')->name('library-management.slider.update');
Route::get('slider/delete','LibrarySliderController@deleteSlider')->name('library-management.slider.delete');

//Time Schedule
Route::get('time_schedule','LibraryTimeScheduleController@index')->name('library-management.time_schedule');
// Route::get('time_schedule/add','LibraryTimeScheduleController@addSlider')->name('library-management.time_schedule.add');
Route::post('time_schedule/store','LibraryTimeScheduleController@storeSchedule')->name('library-management.time_schedule.store');
// Route::get('time_schedule/edit/{id}','LibraryTimeScheduleController@editSlider')->name('library-management.time_schedule.edit');
// Route::post('time_schedule/update/{id}','LibraryTimeScheduleController@updateSlider')->name('library-management.time_schedule.update');
// Route::get('time_schedule/delete','LibraryTimeScheduleController@deleteSlider')->name('library-management.time_schedule.delete');

//Books / Publications
Route::get('books-publications','BooksPublicationsController@index')->name('library-management.books_publications');
Route::get('books-publications/add','BooksPublicationsController@add')->name('library-management.books_publications.add');
Route::post('books-publications/store','BooksPublicationsController@store')->name('library-management.books_publications.store');
Route::get('books-publications/edit/{id}','BooksPublicationsController@edit')->name('library-management.books_publications.edit');
Route::post('books-publications/update/{id}','BooksPublicationsController@update')->name('library-management.books_publications.update');
Route::get('books-publications/delete','BooksPublicationsController@delete')->name('library-management.books_publications.delete');

Route::get('books-publications/filter_new_arrivals','BooksPublicationsController@filterNewArrivals')->name('library-management.books_publications.filter_new_arrivals');
Route::get('books-publications/filter_upcoming_books','BooksPublicationsController@filterUpcomingBooks')->name('library-management.books_publications.filter_upcoming_books');
Route::get('books-publications/filter_publications_journals','BooksPublicationsController@filterPublicationsJournals')->name('library-management.books_publications.filter_publications_journals');

//Library Subjects
Route::get('library-subjects','LibrarySubjectController@index')->name('library-management.library_subjects');
Route::get('library-subjects/add','LibrarySubjectController@add')->name('library-management.library_subjects.add');
Route::post('library-subjects/store','LibrarySubjectController@store')->name('library-management.library_subjects.store');
Route::get('library-subjects/edit/{id}','LibrarySubjectController@edit')->name('library-management.library_subjects.edit');
Route::post('library-subjects/update/{id}','LibrarySubjectController@update')->name('library-management.library_subjects.update');
Route::get('library-subjects/delete','LibrarySubjectController@delete')->name('library-management.library_subjects.delete');

//Library News
Route::get('library-news','LibraryNewsController@index')->name('library-management.library_news');
Route::get('library-news/add','LibraryNewsController@add')->name('library-management.library_news.add');
Route::post('library-news/store','LibraryNewsController@store')->name('library-management.library_news.store');
Route::get('library-news/edit/{id}','LibraryNewsController@edit')->name('library-management.library_news.edit');
Route::post('library-news/update/{id}','LibraryNewsController@update')->name('library-management.library_news.update');
Route::get('library-news/delete','LibraryNewsController@delete')->name('library-management.library_news.delete');

//Ask Librarian

Route::get('ask-librarian','ContactMessageController@askLibrarian')->name('library-management.ask_librarian');
