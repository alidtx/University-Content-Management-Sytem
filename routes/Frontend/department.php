<?php

// Start - Department Frontend
Route::get('/all-departments','FrontController@allDepartments')->name('all_departments');
Route::get('/{id}/department-details','FrontController@departmentDetails')->name('department-details');
// End - Department Frontend

// Start - Department Head Frontend
Route::get('/department_head', 'FrontController@departmentHead')->name('department_head');
Route::get('/department_head_details/{id}', 'FrontController@departmentHeadDetails')->name('department_head_details');

// End - Department Head Frontend

// Start - Department Details

Route::get('/{id}/department-objectives','DepartmentFrontController@departmentObjectives')->name('department_objectives');
Route::get('/{id}/department-mission-vision','DepartmentFrontController@departmentMissionVision')->name('department_mission_vision');
Route::get('/{id}/department-programs','DepartmentFrontController@departmentProgram')->name('department_program');
Route::get('/{id}/department-routine','DepartmentFrontController@departmentRoutine')->name('department_routine');
Route::get('/{id}/department-result','DepartmentFrontController@departmentResult')->name('department_result');
Route::get('/{id}/department-calender','DepartmentFrontController@departmentCalender')->name('department_calender');
Route::get('/{id}/department-member','DepartmentFrontController@departmentMember')->name('department_member');
Route::get('/{id}/department-member-details','DepartmentFrontController@departmentMemberDetails')->name('department_member_details');



Route::get('/{id}/department-staff','DepartmentFrontController@departmentStaff')->name('department_staff');
Route::get('/{id}/department-contact','DepartmentFrontController@departmentContact')->name('department_contact');
Route::get('/{id}/chairman-message','DepartmentFrontController@departmentMessage')->name('department_message');

