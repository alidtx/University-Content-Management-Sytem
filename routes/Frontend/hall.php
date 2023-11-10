<?php

// Start - Hall Frontend
Route::get('/all_halls', 'FrontController@allHalls')->name('all_halls');
Route::get('/{id}/hall_details','FrontController@allHallDetail')->name('hall_details');

Route::get('/{id}/hall_history', 'hallFront@hallHistory')->name('hall_history');
Route::get('/{id}/hall_provost', 'hallFront@allHallProvost')->name('all_hall_provost');
Route::get('/{id}/provost_details', 'hallFront@ProvostDetails')->name('provost_details');

Route::get('/{id}/hall_member_details', 'hallFront@HallMemberDetails')->name('hall_member_details');

Route::get('/{id}/provost_message', 'hallFront@provostMessage')->name('provost_message');
Route::get('/{id}/house_tutor', 'hallFront@houseTutor')->name('house_tutor');
Route::get('/{id}/officers', 'hallFront@administrativeStaff')->name('administrative_staff');
Route::get('/{id}/student_activity', 'hallFront@studentActivity')->name('student_activity');
Route::get('/{id}/archivement', 'hallFront@archivement')->name('archivement');
Route::get('/{id}/scholarship_financial', 'hallFront@scholarshipFinancial')->name('scholarship_financial');
Route::get('/{id}/hall_contact', 'hallFront@hallContact')->name('hall_contact');
// End - Hall Frontend

// Start - Provost Frontend
Route::get('/hall_provost', 'FrontController@hallProvost')->name('hall_provost');
Route::get('/hall_provost_details/{id}', 'FrontController@hallProvostDetails')->name('hall_provost_details');

// End - Provost Frontend
