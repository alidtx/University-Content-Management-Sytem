<?php

// Start - Office Frontend
Route::get('/all-offices', 'FrontController@allOffices')->name('all_offices');
Route::get('/{id}/office-details', 'FrontController@officeDetails')->name('office-details');


Route::get('/{id}/office-about', 'OfficeFrontController@allOfficeAbout')->name('all-office-about');
Route::get('/{id}/office-people', 'OfficeFrontController@allOfficePeople')->name('all-office-people');
Route::get('/{id}/office-contact', 'OfficeFrontController@allOfficeContact')->name('all-office-contact');
// End - Office Frontend

// Start - Office Head Frontend
Route::get('/office_head', 'FrontController@headOffices')->name('office_head');
Route::get('/office_head_details/{id}', 'FrontController@officeHeadDetails')->name('office_head_details');
// End - Office Head Frontend

// Start - Officers Profile Frontend
Route::get('/officer_profile', 'FrontController@officerProfile')->name('officer_profile');
Route::get('/officer_profile_details/{id}', 'FrontController@officerProfileDetails')->name('officer_profile_details');
// Route::get('/officer_profile_details/{id}','FrontController@officerProfile')->name('officer_profile_details');
// End - Officers Profile Frontend

// Office Staff
Route::get('/office-staff', 'FrontController@officeStaff')->name('office_staff');

// VC office Frontend
Route::get('/vc-office', 'FrontController@vcOffice')->name('vc_office');
Route::get('/vc-list', 'FrontController@vcList')->name('vc_list');
Route::get('/vc-office-staff', 'FrontController@vcStaff')->name('vc_staff');
Route::get('/vc-contact', 'FrontController@vcContact')->name('vc_contact');

// Pro VC office Frontend

Route::get('/pro-vc-office', 'FrontController@proVcOffice')->name('pro_vc_office');
Route::get('/pro-vc-list', 'FrontController@proVcList')->name('pro_vc_list');
Route::get('/pro-vc-office-staff', 'FrontController@proVcStaff')->name('pro_vc_staff');
Route::get('/pro-vc-contact', 'FrontController@proVcContact')->name('pro_vc_contact');

// Treasurer office Frontend

Route::get('/treasurer-office', 'FrontController@treasurerOffice')->name('treasurer_office');
Route::get('/treasurer-list', 'FrontController@treasurerList')->name('treasurer_list');
Route::get('/treasurer-office-staff', 'FrontController@treasurerStaff')->name('treasurer_staff');
Route::get('/treasurer-contact', 'FrontController@treasurerContact')->name('treasurer_contact');

// Proctor office Frontend

Route::get('/proctor-office', 'FrontController@proctorOffice')->name('proctor_office');
Route::get('/proctor-list', 'FrontController@proctorList')->name('proctor_list');
Route::get('/assistant-proctors', 'FrontController@proctorStaff')->name('proctor_staff');
Route::get('/proctor-contact', 'FrontController@proctorContact')->name('proctor_contact');



Route::get('/iqac-about', 'IqacController@iqacAbout')->name('iqac_about');
Route::get('/iqac-teams', 'IqacController@iqacTeams')->name('iqac_teams');
Route::get('/iqac-documents', 'IqacController@iqacDocuments')->name('iqac_documents');
Route::get('/iqac-news', 'IqacController@iqacNews')->name('iqac_news');
Route::get('/iqac-training', 'IqacController@iqacTraining')->name('iqac_training');
Route::get('/iqac-contact', 'IqacController@iqacContact')->name('iqac_contact');





Route::get('/employee_directory', 'DirectoryFrontController@employeeDirectory')->name('employee_directory');
Route::get('/type-wise-category-directory', 'DirectoryFrontController@typeWiseCategoryDirectory')->name('type_wise_category_directory');
Route::get('/faculty-wise-department', 'DirectoryFrontController@facultyWiseDepartment')->name('faculty_wise_department');
Route::get('/department-wise-member', 'DirectoryFrontController@departmentWiseMember')->name('department_wise_member');
Route::get('/category-wise-member', 'DirectoryFrontController@CategoryWiseMember')->name('category_wise_member');
Route::get('/all_teacher', 'DirectoryFrontController@allteacher')->name('all_teacher')
;
