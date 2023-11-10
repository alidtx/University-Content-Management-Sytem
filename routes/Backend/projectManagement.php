<?php
//Role
Route::get('role/view', 'RoleController@index')->name('project-management.role.view');
Route::get('role/add', 'RoleController@addRole')->name('project-management.role.add');
Route::post('role/store', 'RoleController@storeRole')->name('project-management.role.store');
Route::get('role/edit/{id}', 'RoleController@editRole')->name('project-management.role.edit');
Route::post('role/update/{id}', 'RoleController@updateRole')->name('project-management.role.update');
Route::get('role/delete', 'RoleController@deleteRole')->name('project-management.role.delete');
// Profile
Route::get('resource/profile/view', 'ResourceProfileController@index')->name('project-management.resource.profile.view');
Route::get('resource/profile/edit/{id}', 'ResourceProfileController@editProfile')->name('project-management.resource.profile.edit');
Route::post('resource/profile/update/{id}', 'ResourceProfileController@updateProfile')->name('project-management.resource.profile.update');
//Change Password
Route::get('change/password', 'PasswordChangeController@changePassword')->name('project-management.change.password');
Route::post('store/password', 'PasswordChangeController@storePassword')->name('project-management.store.password');

//Slider
Route::get('slider/{slider_master_id}', 'SliderController@index')->name('site-setting.slider')->where('slider_master_id', '[0-9]+');
Route::get('slider/add/{slider_master_id}', 'SliderController@addSlider')->name('site-setting.slider.add');
Route::post('slider/store', 'SliderController@storeSlider')->name('site-setting.slider.store');
Route::get('slider/edit/{slider_master_id}/{id}', 'SliderController@editSlider')->name('site-setting.slider.edit');
Route::post('slider/update/{id}', 'SliderController@updateSlider')->name('site-setting.slider.update');
Route::get('slider/delete', 'SliderController@deleteSlider')->name('site-setting.slider.delete');
//Slider Video
Route::post('slider/store/video', 'SliderController@storeSliderVideo')->name('site-setting.slider.store_video');

//Slider Master
Route::get('slider-master', 'SliderMasterController@index')->name('site-setting.slider-master');
Route::get('slider-master/add', 'SliderMasterController@add')->name('site-setting.slider-master.add');
Route::post('slider-master/store', 'SliderMasterController@store')->name('site-setting.slider-master.store');
Route::get('slider-master/edit/{id}', 'SliderMasterController@edit')->name('site-setting.slider-master.edit');
Route::post('slider-master/update/{id}', 'SliderMasterController@update')->name('site-setting.slider-master.update');
Route::get('slider-master/delete', 'SliderMasterController@delete')->name('site-setting.slider-master.delete');



//At a Galance
Route::get('at_a_galance', 'Setup\AtGalanceController@index')->name('site-setting.at_a_galance');
Route::get('at_a_galance/add', 'Setup\AtGalanceController@addAtGalance')->name('site-setting.at_a_galance.add');
Route::post('at_a_galance/store', 'Setup\AtGalanceController@storeAtGalance')->name('site-setting.at_a_galance.store');
Route::get('at_a_galance/edit/{id}', 'Setup\AtGalanceController@editAtGalance')->name('site-setting.at_a_galance.edit');
Route::post('at_a_galance/update/{id}', 'Setup\AtGalanceController@updateAtGalance')->name('site-setting.at_a_galance.update');
Route::get('at_a_galance/delete', 'Setup\AtGalanceController@deleteAtGalance')->name('site-setting.at_a_galance.delete');

//Library at a Galance
Route::get('library_galance', 'LibraryGlanceController@index')->name('site-setting.library_galance');
Route::get('library_galance/add', 'LibraryGlanceController@addAtGalance')->name('site-setting.library_galance.add');
Route::post('library_galance/store', 'LibraryGlanceController@storeAtGalance')->name('site-setting.library_galance.store');
Route::get('library_galance/edit/{id}', 'LibraryGlanceController@editAtGalance')->name('site-setting.library_galance.edit');
Route::post('library_galance/update/{id}', 'LibraryGlanceController@updateAtGalance')->name('site-setting.library_galance.update');
Route::get('library_galance/delete', 'LibraryGlanceController@deleteAtGalance')->name('site-setting.library_galance.delete');

//Advisor
Route::get('advisor', 'AdvisorController@index')->name('site-setting.advisor');
Route::get('advisor/add', 'AdvisorController@addAdvisor')->name('site-setting.advisor.add');
Route::post('advisor/store', 'AdvisorController@storeAdvisor')->name('site-setting.advisor.store');
Route::get('advisor/edit/{id}', 'AdvisorController@editAdvisor')->name('site-setting.advisor.edit');
Route::post('advisor/update/{id}', 'AdvisorController@updateAdvisor')->name('site-setting.advisor.update');
Route::get('advisor/delete', 'AdvisorController@deleteAdvisor')->name('site-setting.advisor.delete');

//About
Route::get('about', 'AboutController@index')->name('site-setting.about');
Route::get('about/add', 'AboutController@addAbout')->name('site-setting.about.add');
Route::post('about/store', 'AboutController@storeAbout')->name('site-setting.about.store');
Route::get('about/edit/{id}', 'AboutController@editAbout')->name('site-setting.about.edit');
Route::post('about/update/{id}', 'AboutController@updateAbout')->name('site-setting.about.update');
Route::get('about/delete', 'AboutController@deleteAbout')->name('site-setting.about.delete');

//Director

Route::get('vc-message', 'DirectorController@index')->name('site-setting.vc_message');
Route::get('vc-message/add', 'DirectorController@addDirector')->name('site-setting.vc_message.add');
Route::post('vc-message/store', 'DirectorController@storeDirector')->name('site-setting.vc_message.store');
Route::get('vc-message/edit/{id}', 'DirectorController@editDirector')->name('site-setting.vc_message.edit');
Route::post('vc-message/update/{id}', 'DirectorController@updateDirector')->name('site-setting.vc_message.update');
Route::get('vc-message/delete', 'DirectorController@deleteDirector')->name('site-setting.vc_message.delete');

//Message
Route::get('message', 'MessageController@index')->name('site-setting.message');
Route::get('message/add', 'MessageController@add')->name('site-setting.message.add');
Route::post('message/store', 'MessageController@store')->name('site-setting.message.store');
Route::get('message/edit/{id}', 'MessageController@edit')->name('site-setting.message.edit');
Route::post('message/update/{id}', 'MessageController@update')->name('site-setting.message.update');
Route::get('message/delete', 'MessageController@destroy')->name('site-setting.message.delete');

Route::get('type-wise-category', 'MessageController@typeWiseCategory')->name('type_wise_category');
Route::get('category-wise-head', 'MessageController@categoryWiseHead')->name('category_wise_head');


//Facility
Route::get('facility', 'FacilityController@index')->name('site-setting.facility');
Route::get('facility/add', 'FacilityController@addFacility')->name('site-setting.facility.add');
Route::post('facility/store', 'FacilityController@storeFacility')->name('site-setting.facility.store');
Route::get('facility/edit/{id}', 'FacilityController@editFacility')->name('site-setting.facility.edit');
Route::post('facility/update/{id}', 'FacilityController@updateFacility')->name('site-setting.facility.update');
Route::get('facility/delete', 'FacilityController@deleteFacility')->name('site-setting.facility.delete');

//Teacher info

Route::get('teacher/information', 'TeacherController@index')->name('site-setting.teacher.information');
Route::get('teacher/information/add', 'TeacherController@addTeacher')->name('site-setting.teacher.information.add');
Route::post('teacher/information/store', 'TeacherController@storeTeacher')->name('site-setting.teacher.information.store');
Route::get('teacher/information/edit/{id}', 'TeacherController@editTeacher')->name('site-setting.teacher.information.edit');
Route::post('teacher/information/update/{id}', 'TeacherController@updateTeacher')->name('site-setting.teacher.information.update');
Route::get('teacher/information/delete', 'TeacherController@deleteTeacher')->name('site-setting.teacher.information.delete');

//Department Head
Route::get('department/head/information', 'DepartmentHeadController@index')->name('site-setting.department.head.information');
Route::get('department/head/information/add', 'DepartmentHeadController@addHead')->name('site-setting.department.head.information.add');
Route::post('department/head/information/store', 'DepartmentHeadController@storeHead')->name('site-setting.department.head.information.store');
Route::get('department/head/information/edit/{id}', 'DepartmentHeadController@editHead')->name('site-setting.department.head.information.edit');
Route::post('department/head/information/update/{id}', 'DepartmentHeadController@updateHead')->name('site-setting.department.head.information.update');
Route::get('department/head/information/delete', 'DepartmentHeadController@deleteHead')->name('site-setting.department.head.information.delete');

//News

Route::get('news-event-notice', 'NewsController@index')->name('site-setting.news');
Route::get('news-event-notice/add', 'NewsController@addNews')->name('site-setting.news.add');
Route::post('news-event-notice/store', 'NewsController@storeNews')->name('site-setting.news.store');
Route::get('news-event-notice/edit/{id}', 'NewsController@editNews')->name('site-setting.news.edit');
Route::post('news-event-notice/update/{id}', 'NewsController@updateNews')->name('site-setting.news.update');
Route::get('news-event-notice/delete', 'NewsController@deleteNews')->name('site-setting.news.delete');
Route::get('faculty-wise-department', 'NewsController@facultyWiseDepartment')->name('faculty_wise_department');
Route::get('news-event-notice/filter_news', 'NewsController@filterNews')->name('site-setting.news.filter_news');
Route::get('news-event-notice/filter_event', 'NewsController@filterEvent')->name('site-setting.news.filter_event');
Route::get('news-event-notice/filter_notice', 'NewsController@filterNotice')->name('site-setting.news.filter_notice');
Route::get('news-event-notice/filter_press_release', 'NewsController@filterPressRelease')->name('site-setting.news.filter_press_release');
Route::get('news-event-notice/filter_general_notice', 'NewsController@filterGeneralNotice')->name('site-setting.news.filter_general_notice');
Route::get('news-event-notice/filter_special_notice', 'NewsController@filterSpecialNotice')->name('site-setting.news.filter_special_notice');
Route::get('news-event-notice/filter_tender_notice', 'NewsController@filterTenderNotice')->name('site-setting.news.filter_tender_notice');

//activity

Route::get('activity', 'ActivityController@index')->name('site-setting.activity');
Route::get('activity/add', 'ActivityController@addActivity')->name('site-setting.activity.add');
Route::post('activity/store', 'ActivityController@storeActivity')->name('site-setting.activity.store');
Route::get('activity/edit/{id}', 'ActivityController@editActivity')->name('site-setting.activity.edit');
Route::post('activity/update/{id}', 'ActivityController@updateActivity')->name('site-setting.activity.update');
Route::get('activity/delete', 'ActivityController@deleteActivity')->name('site-setting.activity.delete');

//Offer

Route::get('offer', 'OfferController@index')->name('site-setting.offer');
Route::get('offer/add', 'OfferController@addOffer')->name('site-setting.offer.add');
Route::post('offer/store', 'OfferController@storeOffer')->name('site-setting.offer.store');
Route::get('offer/edit/{id}', 'OfferController@editOffer')->name('site-setting.offer.edit');
Route::post('offer/update/{id}', 'OfferController@updateOffer')->name('site-setting.offer.update');
Route::get('offer/delete', 'OfferController@deleteOffer')->name('site-setting.offer.delete');

//Offer Background Video
Route::post('offer/store/video', 'OfferController@storeOfferVideo')->name('site-setting.offer.store_video');

//Gallery

Route::get('gallery', 'GalleryController@index')->name('site-setting.gallery');
Route::get('gallery/add', 'GalleryController@addGallery')->name('site-setting.gallery.add');
Route::post('gallery/store', 'GalleryController@storeGallery')->name('site-setting.gallery.store');
Route::get('gallery/edit/{id}', 'GalleryController@editGallery')->name('site-setting.gallery.edit');
Route::post('gallery/update/{id}', 'GalleryController@updateGallery')->name('site-setting.gallery.update');
Route::get('gallery/delete', 'GalleryController@deleteGallery')->name('site-setting.gallery.delete');

//Research

Route::get('research', 'ResearchController@index')->name('site-setting.research');
Route::get('research/add', 'ResearchController@addResearch')->name('site-setting.research.add');
Route::post('research/store', 'ResearchController@storeResearch')->name('site-setting.research.store');
Route::get('research/edit/{id}', 'ResearchController@editResearch')->name('site-setting.research.edit');
Route::post('research/update/{id}', 'ResearchController@updateResearch')->name('site-setting.research.update');
Route::get('research/delete', 'ResearchController@deleteResearch')->name('site-setting.research.delete');

//Banner

Route::get('banner', 'BannerController@index')->name('site-setting.banner');
Route::get('banner/add', 'BannerController@addBanner')->name('site-setting.banner.add');
Route::post('banner/store', 'BannerController@storeBanner')->name('site-setting.banner.store');
Route::get('banner/edit/{id}', 'BannerController@editBanner')->name('site-setting.banner.edit');
Route::post('banner/update/{id}', 'BannerController@updateBanner')->name('site-setting.banner.update');
Route::get('banner/delete', 'BannerController@deleteBanner')->name('site-setting.banner.delete');

//PartnerShip

Route::get('partnership', 'PartnershipController@index')->name('site-setting.partnership');
Route::get('partnership/add', 'PartnershipController@addPartnership')->name('site-setting.partnership.add');
Route::post('partnership/store', 'PartnershipController@storePartnership')->name('site-setting.partnership.store');
Route::get('partnership/edit/{id}', 'PartnershipController@editPartnership')->name('site-setting.partnership.edit');
Route::post('partnership/update/{id}', 'PartnershipController@updatePartnership')->name('site-setting.partnership.update');
Route::get('partnership/delete', 'PartnershipController@deletePartnership')->name('site-setting.partnership.delete');

//Designation



Route::get('designation', 'DesignationController@index')->name('site-setting.designation');
// Route::get('designation', 'DesignationController@index')->name('site-setting.designation');
Route::get('designation/add', 'DesignationController@addDesignation')->name('site-setting.designation.add');
Route::post('designation/store', 'DesignationController@storeDesignation')->name('site-setting.designation.store');
Route::get('designation/edit/{id}', 'DesignationController@editDesignation')->name('site-setting.designation.edit');
Route::post('designation/update/{id}', 'DesignationController@updateDesignation')->name('site-setting.designation.update');
Route::get('designation/delete', 'DesignationController@deleteDesignation')->name('site-setting.designation.delete');


//Follow Us

Route::get('follow/us', 'FollowUsController@index')->name('site-setting.follow.us');
Route::get('follow/us/add', 'FollowUsController@addFollowUs')->name('site-setting.follow.us.add');
Route::post('follow/us/store', 'FollowUsController@storeFollowUs')->name('site-setting.follow.us.store');
Route::get('follow/us/edit/{id}', 'FollowUsController@editFollowUs')->name('site-setting.follow.us.edit');
Route::post('follow/us/update/{id}', 'FollowUsController@updateFollowUs')->name('site-setting.follow.us.update');
Route::get('follow/us/delete', 'FollowUsController@deleteFollowUs')->name('site-setting.follow.us.delete');


//Features

Route::get('features', 'FeaturesController@index')->name('site-setting.features');
Route::get('features/add', 'FeaturesController@addFeatures')->name('site-setting.features.add');
Route::post('features/store', 'FeaturesController@storeFeatures')->name('site-setting.features.store');
Route::get('features/edit/{id}', 'FeaturesController@editFeatures')->name('site-setting.features.edit');
Route::post('features/update/{id}', 'FeaturesController@updateFeatures')->name('site-setting.features.update');
Route::get('features/delete', 'FeaturesController@deleteFeatures')->name('site-setting.features.delete');

//Training & Enroll

Route::get('training_enroll', 'TrainingEnrollController@index')->name('site-setting.training_enroll');
Route::get('training_enroll/add', 'TrainingEnrollController@addTrainingEnroll')->name('site-setting.training_enroll.add');
Route::post('training_enroll/store', 'TrainingEnrollController@storeTrainingEnroll')->name('site-setting.training_enroll.store');
Route::get('training_enroll/edit/{id}', 'TrainingEnrollController@editTrainingEnroll')->name('site-setting.training_enroll.edit');
Route::post('training_enroll/update/{id}', 'TrainingEnrollController@updateTrainingEnroll')->name('site-setting.training_enroll.update');
Route::get('training_enroll/delete', 'TrainingEnrollController@deleteTrainingEnroll')->name('site-setting.training_enroll.delete');

Route::post('training_enroll/background/store', 'TrainingEnrollController@storeTrainingBackground')->name('site-setting.training_enroll.background.store');

//Alumni

Route::get('alumni', 'AlumniController@index')->name('site-setting.alumni');
Route::get('alumni/add', 'AlumniController@addAlumni')->name('site-setting.alumni.add');
Route::post('alumni/store', 'AlumniController@storeAlumni')->name('site-setting.alumni.store');
Route::get('alumni/edit/{id}', 'AlumniController@editAlumni')->name('site-setting.alumni.edit');
Route::post('alumni/update/{id}', 'AlumniController@updateAlumni')->name('site-setting.alumni.update');
Route::get('alumni/delete', 'AlumniController@deleteAlumni')->name('site-setting.alumni.delete');

Route::post('alumni/background/store', 'AlumniController@storeAlumniBackground')->name('site-setting.alumni.background.store');

//Student Feedbacks

Route::get('student/feedbacks', 'StudentFeedbackController@index')->name('site-setting.student_feedbacks');
Route::get('student/feedbacks/add', 'StudentFeedbackController@addStudentFeedback')->name('site-setting.student_feedbacks.add');
Route::post('student/feedbacks/store', 'StudentFeedbackController@storeStudentFeedback')->name('site-setting.student_feedbacks.store');
Route::get('student/feedbacks/edit/{id}', 'StudentFeedbackController@editStudentFeedback')->name('site-setting.student_feedbacks.edit');
Route::post('student/feedbacks/update/{id}', 'StudentFeedbackController@updateStudentFeedback')->name('site-setting.student_feedbacks.update');
Route::get('student/feedbacks/delete', 'StudentFeedbackController@deleteStudentFeedback')->name('site-setting.student_feedbacks.delete');

Route::post('student/feedbacks/background/store', 'StudentFeedbackController@storeFeedbackBackground')->name('site-setting.student_feedbacks.background.store');

//Our Research

Route::get('our/research', 'OurResearchController@index')->name('site-setting.our_research');
Route::get('our/research/add', 'OurResearchController@addOurResearch')->name('site-setting.our_research.add');
Route::post('our/research/store', 'OurResearchController@storeOurResearch')->name('site-setting.our_research.store');
Route::get('our/research/edit/{id}', 'OurResearchController@editOurResearch')->name('site-setting.our_research.edit');
Route::post('our/research/update/{id}', 'OurResearchController@updateOurResearch')->name('site-setting.our_research.update');
Route::get('our/research/delete', 'OurResearchController@deleteOurResearch')->name('site-setting.our_research.delete');

Route::post('our/research/background/store', 'OurResearchController@storeResearchBackground')->name('site-setting.our_research.background.store');

//Our Development

Route::get('our/development', 'OurDevelopmentController@index')->name('site-setting.our_development');
Route::get('our/development/add', 'OurDevelopmentController@addOurDevelopment')->name('site-setting.our_development.add');
Route::post('our/development/store', 'OurDevelopmentController@storeOurDevelopment')->name('site-setting.our_development.store');
Route::get('our/development/edit/{id}', 'OurDevelopmentController@editOurDevelopment')->name('site-setting.our_development.edit');
Route::post('our/development/update/{id}', 'OurDevelopmentController@updateOurDevelopment')->name('site-setting.our_development.update');
Route::get('our/development/delete', 'OurDevelopmentController@deleteOurDevelopment')->name('site-setting.our_development.delete');

Route::post('our/development/background/store', 'OurDevelopmentController@storeDevelopmentBackground')->name('site-setting.our_development.background.store');

//Our Library

Route::get('our/library', 'OurLibraryController@index')->name('site-setting.our_library');
Route::get('our/library/add', 'OurLibraryController@addOurLibrary')->name('site-setting.our_library.add');
Route::post('our/library/store', 'OurLibraryController@storeOurLibrary')->name('site-setting.our_library.store');
Route::get('our/library/edit/{id}', 'OurLibraryController@editOurLibrary')->name('site-setting.our_library.edit');
Route::post('our/library/update/{id}', 'OurLibraryController@updateOurLibrary')->name('site-setting.our_library.update');
Route::get('our/library/delete', 'OurLibraryController@deleteOurLibrary')->name('site-setting.our_library.delete');

Route::post('our/library/background/store', 'OurLibraryController@storeLibraryBackground')->name('site-setting.our_library.background.store');

//Our Campus

Route::get('our/campus', 'OurCampusController@index')->name('site-setting.our_campus');
Route::get('our/campus/add', 'OurCampusController@addOurCampus')->name('site-setting.our_campus.add');
Route::post('our/campus/store', 'OurCampusController@storeOurCampus')->name('site-setting.our_campus.store');
Route::get('our/campus/edit/{id}', 'OurCampusController@editOurCampus')->name('site-setting.our_campus.edit');
Route::post('our/campus/update/{id}', 'OurCampusController@updateOurCampus')->name('site-setting.our_campus.update');
Route::get('our/campus/delete', 'OurCampusController@deleteOurCampus')->name('site-setting.our_campus.delete');

Route::post('our/campus/background/store', 'OurCampusController@storeCampusBackground')->name('site-setting.our_campus.background.store');

//Tag Lines

Route::get('tagline', 'TaglineController@index')->name('site-setting.tagline');
Route::get('tagline/add', 'TaglineController@addTagline')->name('site-setting.tagline.add');
Route::post('tagline/store', 'TaglineController@storeTagline')->name('site-setting.tagline.store');
Route::get('tagline/edit/{id}', 'TaglineController@editTagline')->name('site-setting.tagline.edit');
Route::post('tagline/update/{id}', 'TaglineController@updateTagline')->name('site-setting.tagline.update');
Route::get('tagline/delete', 'TaglineController@deleteTagline')->name('site-setting.tagline.delete');

//Institute Details
Route::get('institute_details', 'InstituteDetailsController@index')->name('site-setting.institute_details');
// Route::get('time_schedule/add','LibraryTimeScheduleController@addSlider')->name('site-setting.time_schedule.add');
Route::post('institute_details/store', 'InstituteDetailsController@store')->name('site-setting.institute_details.store');
// Route::get('time_schedule/edit/{id}','LibraryTimeScheduleController@editSlider')->name('site-setting.time_schedule.edit');
// Route::post('time_schedule/update/{id}','LibraryTimeScheduleController@updateSlider')->name('site-setting.time_schedule.update');
// Route::get('time_schedule/delete','LibraryTimeScheduleController@deleteSlider')->name('site-setting.time_schedule.delete');


//Program Crud

Route::get('program', 'ProgramController@index')->name('site-setting.program');
Route::get('program/add', 'ProgramController@add')->name('site-setting.program.add');
Route::post('program/store', 'ProgramController@store')->name('site-setting.program.store');
Route::get('program/edit/{id}', 'ProgramController@edit')->name('site-setting.program.edit');
Route::post('program/update/{id}', 'ProgramController@update')->name('site-setting.program.update');
Route::get('program/delete', 'ProgramController@delete')->name('site-setting.program.delete');

//Course Crud

Route::get('course', 'CourseController@index')->name('site-setting.course');
Route::get('course/add', 'CourseController@add')->name('site-setting.course.add');
Route::post('course/store', 'CourseController@store')->name('site-setting.course.store');
Route::get('course/edit/{id}', 'CourseController@edit')->name('site-setting.course.edit');
Route::post('course/update/{id}', 'CourseController@update')->name('site-setting.course.update');
Route::get('course/delete', 'CourseController@delete')->name('site-setting.course.delete');
