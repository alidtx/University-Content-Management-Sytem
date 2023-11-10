<?php

//Contact Us

// Route::get('contact_us','ContactUsController@index')->name('frontend-menu.contact.us');
// Route::get('contact_us/add','ContactUsController@addContactUs')->name('frontend-menu.contact.us.add');
// Route::post('contact_us/store','ContactUsController@storeContactUs')->name('frontend-menu.contact.us.store');
// Route::get('contact_us/edit/{id}','Backend\ContactUsController@editContactUs')->name('frontend-menu.contact.us.edit');
// Route::post('contact_us/update/{id}','Backend\ContactUsController@updateContactUs')->name('frontend-menu.contact.us.update');
// Route::get('contact_us/delete','Backend\ContactUsController@deleteContactUs')->name('frontend-menu.contact.us.delete');

//Contact Message

Route::get('contact/message','ContactMessageController@index')->name('top-menu.contact.message');
Route::get('control-top-left-menu','ContactMessageController@controlTopLeftMenu')->name('top-menu.control_top_left_menu');
Route::post('store-top-left-menu','ContactMessageController@storeControlTopLeftMenu')->name('top-menu.store_control_top_left_menu');


//Photo Gallery

// Route::get('photo_gallery','PhotoGalleryController@index')->name('top-menu.photo_gallery');
// Route::get('photo_gallery/add','PhotoGalleryController@addPhotoGallery')->name('top-menu.photo_gallery.add');
// Route::post('photo_gallery/store','PhotoGalleryController@storePhotoGallery')->name('top-menu.photo_gallery.store');
// Route::get('photo_gallery/edit/{id}','PhotoGalleryController@editPhotoGallery')->name('top-menu.photo_gallery.edit');
// Route::post('photo_gallery/update/{id}','PhotoGalleryController@updatePhotoGallery')->name('top-menu.photo_gallery.update');
// Route::get('photo_gallery/delete','PhotoGalleryController@deletePhotoGallery')->name('top-menu.photo_gallery.delete');
//Route::get('remove/image/from_photo_gallery','PhotoGalleryController@removeImageFromPhotoGallery')->name('remove.image.from_photo_gallery');
// Route::get('remove/image/from_photo_gallery/{id}','PhotoGalleryController@removeImageFromPhotoGallery')->name('remove.image.from_photo_gallery');

//Video Gallery

Route::get('video_gallery','VideoGalleryController@index')->name('top-menu.video_gallery');
Route::get('video_gallery/add','VideoGalleryController@addVideoGallery')->name('top-menu.video_gallery.add');
Route::post('video_gallery/store','VideoGalleryController@storeVideoGallery')->name('top-menu.video_gallery.store');
Route::get('video_gallery/edit/{id}','VideoGalleryController@editVideoGallery')->name('top-menu.video_gallery.edit');
Route::post('video_gallery/update/{id}','VideoGalleryController@updateVideoGallery')->name('top-menu.video_gallery.update');
Route::get('video_gallery/delete','VideoGalleryController@deleteVideoGallery')->name('top-menu.video_gallery.delete');

//Career/Jobs

Route::get('career','CareerController@index')->name('top-menu.career');
Route::get('career/add','CareerController@addCareer')->name('top-menu.career.add');
Route::post('career/store','CareerController@storeCareer')->name('top-menu.career.store');
Route::get('career/edit/{id}','CareerController@editCareer')->name('top-menu.career.edit');
Route::post('career/update/{id}','CareerController@updateCareer')->name('top-menu.career.update');
Route::get('career/delete','CareerController@deleteCareer')->name('top-menu.career.delete');


// Location

Route::get('location_admin','LocationController@index')->name('top-menu.location_admin');
Route::get('location_admin/add','LocationController@addLocation')->name('top-menu.location_admin.add');
Route::post('location_admin/store','LocationController@storeLocation')->name('top-menu.location_admin.store');
Route::get('location_admin/edit/{id}','LocationController@editLocation')->name('top-menu.location_admin.edit');
Route::post('location_admin/update/{id}','LocationController@updateLocation')->name('top-menu.location_admin.update');
Route::get('location_admin/delete','LocationController@deleteLocation')->name('top-menu.location_admin.delete');



 //Photo Gallery Master Start

 Route::get('photo_gallery_master','PhotoGalleryMasterController@index')->name('top-menu.photo_gallery_master');
 Route::get('photo_gallery_master/add','PhotoGalleryMasterController@addPhotoGallery')->name('top-menu.photo_gallery_master.add');
Route::get('photo_gallery_master/edit/{id}','PhotoGalleryMasterController@editPhotoGalleryMaster')->name('top-menu.photo_gallery_master.edit');
 Route::post('photo_gallery_master/store','PhotoGalleryMasterController@storePhotoGallery')->name('top-menu.photo_gallery_master.store');
 Route::get('photo_gallery_master/delete','PhotoGalleryMasterController@deletePhotoGalleryMaster')->name('top-menu.photo_gallery_master.delete');
 Route::post('photo_gallery_master/update/{id}','PhotoGalleryMasterController@updatePhotoGalleryMaster')->name('top-menu.photo_gallery_master.update');
 Route::get('/category_wise_photo','PhotoGalleryMasterController@categoryWisePhoto')->name('category_wise_photo');
 Route::post('photo_gallery_master_view/update/{id}','PhotoGalleryMasterController@updatePhotoGalleryMaster')->name('top-menu.photo_gallery_master.update');



//  route::get('photo_gallery_master/image-add','PhotoGalleryMasterController@addPhotoGalleryImage')->name('top-menu.photo_gallery_master.image-add')->where('id', '[0-9]+');
//  route::post('photo_gallery_master/image-store','PhotoGalleryMasterController@storePhotoGalleryImage')->name('top-menu.photo_gallery_master.image-store');





 route::get('photo_gallery/{photo_master_id}','PhotoGalleryController@index')->name('top-menu.photo_gallery')->where('id', '[0-9]+');
 route::get('photo_gallery/add/{photo_master_id}','PhotoGalleryController@addphotogallery')->name('top-menu.photo_gallery.add');
 route::post('photo_gallery/store','PhotoGalleryController@storephotogallery')->name('top-menu.photo_gallery.store');
 route::get('photo_gallery/edit/{photo_master_id}/{id}','PhotoGalleryController@editphotogallery')->name('top-menu.photo_gallery.edit');
 route::post('photo_gallery/update/{id}','PhotoGalleryController@updatephotogallery')->name('top-menu.photo_gallery.update');
 route::get('photo_gallery/delete','PhotoGalleryController@deletephotogallery')->name('top-menu.photo_gallery.delete');

//  route::get('remove/image/from_photo_gallery','PhotoGalleryController@removeimagefromphotogallery')->name('remove.image.from_photo_gallery');
 route::get('remove/image/from_photo_gallery/{id}','PhotoGalleryController@removeimagefromphotogallery')->name('remove.image.from_photo_gallery');





 //   //Route::get('remove/image/from_photo_gallery','Backend\PhotoGalleryController@removeImageFromPhotoGallery')->name('remove.image.from_photo_gallery');
 //   Route::get('remove/image/from_photo_gallery/{id}','Backend\PhotoGalleryMasterController@removeImageFromPhotoGallery')->name('remove.image.from_photo_gallery');

 //Photo Gallery Master End
