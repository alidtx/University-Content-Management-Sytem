<?php

Route::get('member/list','MemberController@list')->name('member_management.list');
Route::get('member/add','MemberController@add')->name('member_management.add');
Route::post('member/store','MemberController@store')->name('member_management.store');
Route::get('member/edit/{id}','MemberController@edit')->name('member_management.edit');
Route::post('member/update/{id}','MemberController@update')->name('member_management.update');
Route::get('member/delete','MemberController@destroy')->name('member_management.delete');

Route::get('member-type-wise-designation','MemberController@MemberTypeWiseDesignation')->name('member_type_wise_designation');
Route::get('delete-member-image','MemberController@DeleteMemberImage')->name('delete_member_image');


//member education delete
Route::get('member/education/remove/{id}','MemberController@memberEducationRemove')->name('remove_member_education');
//member experience delete
Route::get('member/experience/remove/{id}','MemberController@memberExperienceRemove')->name('remove_member_experience');
//member experience delete
Route::get('member/membership/remove/{id}','MemberController@memberMembershipRemove')->name('remove_member_membership');
//member administrative delete
Route::get('member/administrative/remove/{id}','MemberController@memberAdministrativeRemove')->name('remove_member_administrative');
//member area of interest delete
Route::get('member/area_of_interest/remove/{id}','MemberController@memberInterestAreaRemove')->name('remove_member_interest_area');
//member honor and awards delete
Route::get('member/honor_and_awards/remove/{id}','MemberController@memberHonorAndAwardsRemove')->name('remove_honor_and_awards');
//member scholarships delete
Route::get('member/scholarships/remove/{id}','MemberController@memberScholarshipsRemove')->name('remove_scholarships');
//member responsibilities delete
Route::get('member/responsibilities/remove/{id}','MemberController@memberResponsibilitiesRemove')->name('remove_responsibilities');
//member projects delete
Route::get('member/projects/remove/{id}','MemberController@memberProjectsRemove')->name('remove_projects');
//member training delete
Route::get('member/training/remove/{id}','MemberController@memberTrainingRemove')->name('remove_training');
//member certification delete
Route::get('member/certification/remove/{id}','MemberController@memberCertificationRemove')->name('remove_certification');
//member publication book delete
Route::get('member/publication_book/remove/{id}','MemberController@memberBookRemove')->name('remove_publish_books');
//member publication journal delete
Route::get('member/publication_journal/remove/{id}','MemberController@memberJournalRemove')->name('remove_publish_journals');
//member conference delete
Route::get('member/conference/remove/{id}','MemberController@memberConference')->name('remove_conference');
//member taught_course delete
Route::get('member/taught_course/remove/{id}','MemberController@memberTaughtCourseRemove')->name('remove_member_taught_course');
//member language delete
Route::get('member/language/remove/{id}','MemberController@memberLanguageRemove')->name('remove_member_language');
//member social welfare delete
Route::get('member/social_welfare/remove/{id}','MemberController@memberSocialWelfareRemove')->name('remove_member_social_welfare');
//member skill delete
Route::get('member/skill/remove/{id}','MemberController@memberSkillRemove')->name('remove_member_skill');


Route::prefix('member-to-course')->group(function(){

    Route::get('list','MemberToCourseController@list')->name('member_to_course.list');
    Route::get('add','MemberToCourseController@add')->name('member_to_course.add');
    Route::post('store','MemberToCourseController@store')->name('member_to_course.store');
    Route::get('edit/{id}','MemberToCourseController@edit')->name('member_to_course.edit');
    Route::post('update/{id}','MemberToCourseController@update')->name('member_to_course.update');
    Route::get('delete','MemberToCourseController@destroy')->name('member_to_course.delete');

    //ajax
    Route::get('program-wise-course','MemberToCourseController@programWiseCourse')->name('program_wise_course');

});

Route::prefix('member-to-employee')->group(function(){

    Route::get('member-to-employee/list','MemberToEmployeeController@list')->name('member_to_employee.list');
    Route::get('member-to-employee/add','MemberToEmployeeController@add')->name('member_to_employee.add');
    Route::post('member-to-employee/store','MemberToEmployeeController@store')->name('member_to_employee.store');
    Route::get('member-to-employee/edit/{id}','MemberToEmployeeController@edit')->name('member_to_employee.edit');
    Route::post('member-to-employee/update/{id}','MemberToEmployeeController@update')->name('member_to_employee.update');
    Route::get('member-to-employee/delete','MemberToEmployeeController@destroy')->name('member_to_employee.delete');

});
