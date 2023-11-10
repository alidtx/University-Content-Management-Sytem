<?php

// Faculty
Route::get('/faculty', 'Setup\ManageFacultyController@index')->name('setup.manage_faculty');
Route::get('/faculty/add', 'Setup\ManageFacultyController@add')->name('setup.manage_faculty.add');
Route::post('/faculty/store', 'Setup\ManageFacultyController@store')->name('setup.manage_faculty.store');
Route::get('/faculty/edit/{id}', 'Setup\ManageFacultyController@edit')->name('setup.manage_faculty.edit');
Route::post('/faculty/update/{id}', 'Setup\ManageFacultyController@update')->name('setup.manage_faculty.update');
Route::get('/faculty/delete', 'Setup\ManageFacultyController@delete')->name('setup.manage_faculty.delete');

// Faculty Home

Route::get('/faculty_home', 'FacultyHomeController@index')->name('manage_faculty_home');
Route::get('/faculty_home/add', 'FacultyHomeController@add')->name('manage_faculty_home.add');
Route::post('/faculty_home/store', 'FacultyHomeController@store')->name('manage_faculty_home.store');
Route::get('/faculty_home/edit/{id}', 'FacultyHomeController@edit')->name('manage_faculty_home.edit');
Route::post('/faculty_home/update/{id}', 'FacultyHomeController@update')->name('manage_faculty_home.update');
Route::get('/faculty_home/delete', 'FacultyHomeController@delete')->name('manage_faculty_home.delete');

// Department

Route::get('department', 'Setup\DepartmentController@index')->name('setup.department');
Route::get('department/add', 'Setup\DepartmentController@addDepartment')->name('setup.department.add');
Route::post('department/store', 'Setup\DepartmentController@storeDepartment')->name('setup.department.store');
Route::get('department/edit/{id}', 'Setup\DepartmentController@editDepartment')->name('setup.department.edit');
Route::post('department/update/{id}', 'Setup\DepartmentController@updateDepartment')->name('setup.department.update');
Route::get('department/delete', 'Setup\DepartmentController@deleteDepartment')->name('setup.department.delete');

// Department Home

Route::get('/department_home/add/{dept_id}', 'DepartmentHomeController@add')->name('manage_department_home.add');
Route::post('/department_home/store', 'DepartmentHomeController@store')->name('manage_department_home.store');
Route::get('/department_home/edit/{dept_id}/{id}', 'DepartmentHomeController@edit')->name('manage_department_home.edit');
Route::post('/department_home/update/{id}', 'DepartmentHomeController@update')->name('manage_department_home.update');
Route::get('/department_home/delete', 'DepartmentHomeController@delete')->name('manage_department_home.delete');
Route::get('/department_home/{dept_id}', 'DepartmentHomeController@index')->name('manage_department_home');

// Start - Department To Member
Route::prefix('department-to-members')->group(function () {
    Route::get('list', 'DepartmentToFacultyMemberController@list')->name('department_to_members.list');
    Route::get('add', 'DepartmentToFacultyMemberController@add')->name('department_to_members.add');
    Route::post('store', 'DepartmentToFacultyMemberController@store')->name('department_to_members.store');
    Route::get('edit/{id}', 'DepartmentToFacultyMemberController@edit')->name('department_to_members.edit');
    Route::post('update/{id}', 'DepartmentToFacultyMemberController@update')->name('department_to_members.update');
    Route::get('delete', 'DepartmentToFacultyMemberController@destroy')->name('department_to_members.delete');
    Route::get('member-wise-designation', 'DepartmentToFacultyMemberController@MemberWiseDesignation')->name('member_wise_designation');
});
// End - Department To Member

Route::get('/program', 'Setup\ManageProgramController@index')->name('setup.manage_program');
Route::get('/program/add', 'Setup\ManageProgramController@add')->name('setup.manage_program.add');
Route::post('/program/store', 'Setup\ManageProgramController@store')->name('setup.manage_program.store');
Route::get('/program/edit/{id}', 'Setup\ManageProgramController@edit')->name('setup.manage_program.edit');
Route::post('/program/update/{id}', 'Setup\ManageProgramController@update')->name('setup.manage_program.update');
Route::get('/program/delete', 'Setup\ManageProgramController@delete')->name('setup.manage_program.delete');


Route::get('/office', 'Setup\OfficeController@index')->name('setup.manage_office');
Route::get('/office/add', 'Setup\OfficeController@add')->name('setup.manage_office.add');
Route::post('/office/store', 'Setup\OfficeController@store')->name('setup.manage_office.store');
Route::get('/office/edit/{id}', 'Setup\OfficeController@edit')->name('setup.manage_office.edit');
Route::post('/office/update/{id}', 'Setup\OfficeController@update')->name('setup.manage_office.update');
Route::get('/office/delete', 'Setup\OfficeController@delete')->name('setup.manage_office.delete');

Route::get('/important_link', 'InfortantLinkController@index')->name('setup.manage_important_link');
Route::get('/important_link/add', 'InfortantLinkController@add')->name('setup.manage_important_link.add');
Route::post('/important_link/store', 'InfortantLinkController@store')->name('setup.manage_important_link.store');
Route::get('/important_link/edit/{id}', 'InfortantLinkController@edit')->name('setup.manage_important_link.edit');
Route::post('/important_link/update/{id}', 'InfortantLinkController@update')->name('setup.manage_important_link.update');
Route::get('/important_link/delete', 'InfortantLinkController@delete')->name('setup.manage_important_link.delete');



Route::get('/office_home', 'OfficeHomeController@index')->name('manage_office_home');
Route::get('/office_home/add', 'OfficeHomeController@add')->name('manage_office_home.add');
Route::post('/office_home/store', 'OfficeHomeController@store')->name('manage_office_home.store');
Route::get('/office_home/edit/{id}', 'OfficeHomeController@edit')->name('manage_office_home.edit');
Route::post('/office_home/update/{id}', 'OfficeHomeController@update')->name('manage_office_home.update');
Route::get('/office_home/delete', 'OfficeHomeController@delete')->name('manage_office_home.delete');


Route::get('/workshop_seminar', 'TrainingWorkShopSeminarController@index')->name('manage_workshop_seminar');
Route::get('/workshop_seminar/add', 'TrainingWorkShopSeminarController@add')->name('manage_workshop_seminar.add');
Route::post('/workshop_seminar/store', 'TrainingWorkShopSeminarController@store')->name('manage_workshop_seminar.store');
Route::get('/workshop_seminar/edit/{id}', 'TrainingWorkShopSeminarController@edit')->name('manage_workshop_seminar.edit');
Route::post('/workshop_seminar/update/{id}', 'TrainingWorkShopSeminarController@update')->name('manage_workshop_seminar.update');
Route::get('/workshop_seminar/delete', 'TrainingWorkShopSeminarController@delete')->name('manage_workshop_seminar.delete');

Route::get('/document', 'DocumentController@index')->name('manage_document');
Route::get('/document/add', 'DocumentController@add')->name('manage_document.add');
Route::post('/document/store', 'DocumentController@store')->name('manage_document.store');
Route::get('/document/edit/{id}', 'DocumentController@edit')->name('manage_document.edit');
Route::post('/document/update/{id}', 'DocumentController@update')->name('manage_document.update');
Route::get('/document/delete', 'DocumentController@delete')->name('manage_document.delete');


Route::get('/team', 'TeamController@index')->name('manage_team');
Route::get('/team/add', 'TeamController@add')->name('manage_team.add');
Route::post('/team/store', 'TeamController@store')->name('manage_team.store');
Route::get('/team/edit/{id}', 'TeamController@edit')->name('manage_team.edit');
Route::post('/team/update/{id}', 'TeamController@update')->name('manage_team.update');
Route::get('/team/delete', 'TeamController@delete')->name('manage_team.delete');

 Route::get('/notification','PopupNotifactionController@index')->name('backend.notification');
 Route::get('/notification/add','PopupNotifactionController@add' )->name('add.notification');
 Route::get('/notification/add/{id}','PopupNotifactionController@add')->name('edit.notification');
 Route::get('/notification/delete/{id}','PopupNotifactionController@delete')->name('delete');
 Route::post('/notification_process','PopupNotifactionController@notification_process')->name('backend.setup.notification_process');
 Route::get('/notification/{status}/{id}','PopupNotifactionController@status');


Route::get('/iqac_about', 'IQACaboutController@index')->name('manage_iqac_about');
Route::get('/iqac_about/add', 'IQACaboutController@add')->name('manage_iqac_about.add');
Route::post('/iqac_about/store', 'IQACaboutController@store')->name('manage_iqac_about.store');
Route::get('/iqac_about/edit/{id}', 'IQACaboutController@edit')->name('manage_iqac_about.edit');
Route::post('/iqac_about/update/{id}', 'IQACaboutController@update')->name('manage_iqac_about.update');
Route::get('/iqac_about/delete', 'IQACaboutController@delete')->name('manage_iqac_about.delete');




// Start - Office To Member
Route::prefix('office-to-members')->group(function () {

    Route::get('list', 'OfficeToMemberController@list')->name('office_to_member.list');
    Route::get('add', 'OfficeToMemberController@add')->name('office_to_member.add');
    Route::post('store', 'OfficeToMemberController@store')->name('office_to_member.store');
    Route::get('edit/{id}', 'OfficeToMemberController@edit')->name('office_to_member.edit');
    Route::post('update/{id}', 'OfficeToMemberController@update')->name('office_to_member.update');
    Route::get('delete', 'OfficeToMemberController@destroy')->name('office_to_member.delete');
    Route::get('member-wise-designation', 'OfficeToMemberController@MemberWiseDesignation')->name('member_wise_designation');


});

Route::prefix('library-to-members')->group(function () {

    Route::get('list', 'LibraryToMemberController@list')->name('library_to_member.list');
    Route::get('add', 'LibraryToMemberController@add')->name('library_to_member.add');
    Route::post('store', 'LibraryToMemberController@store')->name('library_to_member.store');
    Route::get('edit/{id}', 'LibraryToMemberController@edit')->name('library_to_member.edit');
    Route::post('update/{id}', 'LibraryToMemberController@update')->name('library_to_member.update');
    Route::get('delete', 'LibraryToMemberController@destroy')->name('library_to_member.delete');
    Route::get('member-wise-designation', 'LibraryToMemberController@MemberWiseDesignation')->name('member_wise_designation');

});
// End - Office To Member

// Start - Syndicate Member
Route::prefix('syndicate-members')->group(function () {
    Route::get('list', 'SyndicateMemberController@list')->name('syndicate_member.list');
    Route::get('add', 'SyndicateMemberController@add')->name('syndicate_member.add');
    Route::post('store', 'SyndicateMemberController@store')->name('syndicate_member.store');
    Route::get('edit/{id}', 'SyndicateMemberController@edit')->name('syndicate_member.edit');
    Route::post('update/{id}', 'SyndicateMemberController@update')->name('syndicate_member.update');
    Route::get('delete', 'SyndicateMemberController@destroy')->name('syndicate_member.delete');
});
// End - Syndicate Member


// Start - Academic Coucil
Route::get('academic-councils/list', 'AcademicCouncilController@list')->name('academic-councils.list');
Route::get('academic-councils/add', 'AcademicCouncilController@add')->name('academic-councils.add');
Route::post('academic-councils/store', 'AcademicCouncilController@store')->name('academic-councils.store');
Route::get('academic-councils/edit/{id}', 'AcademicCouncilController@edit')->name('academic-councils.edit');
Route::post('academic-councils/update/{id}', 'AcademicCouncilController@update')->name('academic-councils.update');
Route::get('academic-councils/delete', 'AcademicCouncilController@destroy')->name('academic-councils.delete');
// End - Academic Coucil


// Form

Route::get('/form', 'FormController@index')->name('manage_form');
Route::get('/form/add', 'FormController@Add')->name('manage_form.add');
Route::post('/form/store', 'FormController@Store')->name('manage_form.store');
Route::get('/form/edit/{id}', 'FormController@Edit')->name('manage_form.edit');
Route::post('/form/update/{id}', 'FormController@Update')->name('manage_form.update');
Route::post('/form/delete', 'FormController@Delete')->name('manage_form.delete');
