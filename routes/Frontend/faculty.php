<?php

// Start - Faculty Frontend
Route::get('/all-faculties','FrontController@allFaculties')->name('all_faculties');


Route::get('/{id}/faculty-details','FrontController@facultyDetails')->name('faculty-details');
// End - Faculty Frontend

// Start - Dean Profile Frontend

Route::get('/dean_profile', 'FrontController@deanMemberProfile')->name('dean_profile');
Route::get('/dean_profile_details/{id}', 'FrontController@deanMemberProfileDetails')->name('dean_profile_details');

// End - Dean Profile Frontend

Route::get('/science-faculty','Frontend\FrontController@viewFacultyScience')->name('viewFaculty');
Route::get('/art-faculty','Frontend\FrontController@viewFacultyArt')->name('viewFacultyArt');
Route::get('/social-faculty','Frontend\FrontController@viewFacultySocial')->name('viewFacultySocial');
Route::get('/law-faculty','Frontend\FrontController@viewFacultyLaw')->name('viewFacultyLaw');
Route::get('/business-studies-faculty','Frontend\FrontController@viewFacultyBusiness')->name('viewFacultyBusiness');
Route::get('/engineering-faculty','Frontend\FrontController@viewFacultyEngineering')->name('viewFacultyEngineering');









// Route::get('/faculty','Frontend\FrontController@moreFaculty')->name('faculty');
// Route::get('/faculty/onleave','Frontend\FrontController@moreFaculty')->name('faculty.onleave');

// Start - Faculty Details

Route::get('/{id}/faculty-history','FacultyFrontController@facultyHistory')->name('faculty_history');
Route::get('/{id}/faculty-mission-vision','FacultyFrontController@facultyMissionVision')->name('faculty_mission_vision');
Route::get('/{id}/faculty-departments','FacultyFrontController@facultyDepartment')->name('faculty_department');
Route::get('/{id}/faculty-calender','FacultyFrontController@facultyCalender')->name('faculty_calender');
Route::get('/{id}/faculty-events','FacultyFrontController@facultyEvent')->name('faculty_event');
Route::get('/{id}/faculty-event-details/{event_id}','FacultyFrontController@facultyEventDetails')->name('faculty_event_details');
Route::get('/{id}/faculty-gallery','FacultyFrontController@facultyGallery')->name('faculty_gallery');
Route::get('/{id}/faculty-contact','FacultyFrontController@facultyContact')->name('faculty_contact');
Route::get('/{id}/faculty-message','FacultyFrontController@facultyMessage')->name('faculty_message');

