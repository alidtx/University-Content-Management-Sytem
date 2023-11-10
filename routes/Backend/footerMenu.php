<?php

//Useful Links

Route::get('useful_links','UsefulLinksController@index')->name('footer-menu.useful.links');
Route::get('useful_links/add','UsefulLinksController@addUsefulLinks')->name('footer-menu.useful.links.add');
Route::post('useful_links/store','UsefulLinksController@storeUsefulLinks')->name('footer-menu.useful.links.store');
Route::get('useful_links/edit/{id}','UsefulLinksController@editUsefulLinks')->name('footer-menu.useful.links.edit');
Route::post('useful_links/update/{id}','UsefulLinksController@updateUsefulLinks')->name('footer-menu.useful.links.update');
Route::get('useful_links/delete','UsefulLinksController@deleteUsefulLinks')->name('footer-menu.useful.links.delete');

//Quick Links

Route::get('quick_links','QuickLinksController@index')->name('footer-menu.quick.links');
Route::get('quick_links/add','QuickLinksController@addQuickLinks')->name('footer-menu.quick.links.add');
Route::post('quick_links/store','QuickLinksController@storeQuickLinks')->name('footer-menu.quick.links.store');
Route::get('quick_links/edit/{id}','QuickLinksController@editQuickLinks')->name('footer-menu.quick.links.edit');
Route::post('quick_links/update/{id}','QuickLinksController@updateQuickLinks')->name('footer-menu.quick.links.update');
Route::get('quick_links/delete','QuickLinksController@deleteQuickLinks')->name('footer-menu.quick.links.delete');

//For Students

Route::get('for_students','ForStudentsController@index')->name('footer-menu.for.students');
Route::get('for_students/add','ForStudentsController@addForStudents')->name('footer-menu.for.students.add');
Route::post('for_students/store','ForStudentsController@storeForStudents')->name('footer-menu.for.students.store');
Route::get('for_students/edit/{id}','ForStudentsController@editForStudents')->name('footer-menu.for.students.edit');
Route::post('for_students/update/{id}','ForStudentsController@updateForStudents')->name('footer-menu.for.students.update');
Route::get('for_students/delete','ForStudentsController@deleteForStudents')->name('footer-menu.for.students.delete');

//Get in Touch

Route::get('get_in_touch','GetInTouchController@index')->name('footer-menu.get.in.touch');
Route::get('get_in_touch/add','GetInTouchController@addGetInTouch')->name('footer-menu.get.in.touch.add');
Route::post('get_in_touch/store','GetInTouchController@storeGetInTouch')->name('footer-menu.get.in.touch.store');
Route::get('get_in_touch/edit/{id}','GetInTouchController@editGetInTouch')->name('footer-menu.get.in.touch.edit');
Route::post('get_in_touch/update/{id}','GetInTouchController@updateGetInTouch')->name('footer-menu.get.in.touch.update');
Route::get('get_in_touch/delete','GetInTouchController@deleteGetInTouch')->name('footer-menu.get.in.touch.delete');

//Fast Service

Route::get('fast_service','FastServiceController@index')->name('footer-menu.fast.service');
Route::get('fast_service/add','FastServiceController@addFastService')->name('footer-menu.fast.service.add');
Route::post('fast_service/store','FastServiceController@storeFastService')->name('footer-menu.fast.service.store');
Route::get('fast_service/edit/{id}','FastServiceController@editFastService')->name('footer-menu.fast.service.edit');
Route::post('fast_service/update/{id}','FastServiceController@updateFastService')->name('footer-menu.fast.service.update');
Route::get('fast_service/delete','FastServiceController@deleteFastService')->name('footer-menu.fast.service.delete');

//Social Media Links

Route::get('social_media_links','SocialMediaLinkController@index')->name('footer-menu.social_media_links');
Route::get('social_media_links/add','SocialMediaLinkController@addSocialMediaLink')->name('footer-menu.social_media_links.add');
Route::post('social_media_links/store','SocialMediaLinkController@storeSocialMediaLink')->name('footer-menu.social_media_links.store');
Route::get('social_media_links/edit/1','SocialMediaLinkController@editSocialMediaLink')->name('footer-menu.social_media_links.edit');
Route::post('social_media_links/update/1','SocialMediaLinkController@updateSocialMediaLink')->name('footer-menu.social_media_links.update');
Route::get('social_media_links/delete','SocialMediaLinkController@deleteSocialMediaLink')->name('footer-menu.social_media_links.delete');

//NOC/Office Order

Route::get('office_order','OfficeOrderController@list')->name('footer-menu.office.order');
Route::get('office_order/add','OfficeOrderController@add')->name('footer-menu.office.order.add');
Route::post('office_order/store','OfficeOrderController@store')->name('footer-menu.office.order.store');
Route::get('office_order/edit/{id}','OfficeOrderController@edit')->name('footer-menu.office.order.edit');
Route::post('office_order/update/{id}','OfficeOrderController@update')->name('footer-menu.office.order.update');
Route::get('office_order/delete','OfficeOrderController@delete')->name('footer-menu.office.order.delete');
Route::get('category-wise-deptOrOffice','OfficeOrderController@categoryWiseDeptOrOffice')->name('category_wise_deptOrOffice');
Route::get('department-wise-member','OfficeOrderController@departmentWiseMember')->name('department_wise_member');
Route::get('office-wise-member','OfficeOrderController@officeWiseMember')->name('office_wise_member');


//office order attachment
Route::get('member/noc-attachment/remove/{id}','OfficeOrderController@officeOrderAttachmentRemove')->name('remove_office_order_attachment');


// Tender

Route::get('tender','TenderController@list')->name('footer-menu.tender');
Route::get('tender/add','TenderController@add')->name('footer-menu.tender.add');
Route::post('tender/store','TenderController@store')->name('footer-menu.tender.store');
Route::get('tender/edit/{id}','TenderController@edit')->name('footer-menu.tender.edit');
Route::post('tender/update/{id}','TenderController@update')->name('footer-menu.tender.update');
Route::get('tender/delete','TenderController@delete')->name('footer-menu.tender.delete');

// Barta

Route::get('barta','BartaController@list')->name('footer-menu.barta');
Route::get('barta/add','BartaController@add')->name('footer-menu.barta.add');
Route::post('barta/store','BartaController@store')->name('footer-menu.barta.store');
Route::get('barta/edit/{id}','BartaController@edit')->name('footer-menu.barta.edit');
Route::post('barta/update/{id}','BartaController@update')->name('footer-menu.barta.update');
Route::get('barta/delete','BartaController@delete')->name('footer-menu.barta.delete');


