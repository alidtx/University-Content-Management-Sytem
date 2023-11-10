<?php

// Syndicate Member Frontend
Route::get('/syndicate-members', 'FrontController@syndicateMember')->name('syndicate_member');

//Academic Council
Route::get('/academic-council', 'FrontController@academicCouncil')->name('academic_council');

// Start - Faculty Member Profile Frontend
Route::get('/member_profile', 'FrontController@facultyMemberProfile')->name('member_profile');
// Route::get('/member_profile_details/{id}','FrontController@officeDetails')->name('member_profile_details');
Route::get('/faculty_member_details/{id}','FrontController@facultyMemberProfileDetails')->name('faculty_member_details');

// End - Faculty Member Profile Frontend
