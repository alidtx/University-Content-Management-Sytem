<?php

Route::get('/', 'FrontController@home')->name('home');
Route::get('/demo', 'FrontController@home')->name('site-setting.director');

Route::get('/demo-page', 'FrontController@demoPage')->name('demo');
Route::get('/university-facilities', 'FrontController@allfacilities')->name('university.facilities');
Route::get('/new-vc-page', 'FrontController@newVCPages')->name('new.vc-page');


// Liberary Routes
Route::get('/library_index', 'FrontController@libraryIndex')->name('university.libraryIndex');
Route::get('/library_about', 'FrontController@libraryAbout')->name('university.library_about');
Route::get('/library_people', 'FrontController@libraryPeople')->name('library.library_people');
Route::get('/library_collection', 'FrontController@collection')->name('library.collection');
Route::get('/library_contact_us', 'FrontController@libraryContact')->name('library.contact');
Route::post('/library_post', 'FrontController@libraryPost')->name('library.library_post');
Route::get('/library_time_schedule', 'FrontController@librarySchedule')->name('library.schedule');





Route::get('/university_blog', 'Blog\BlogController@blogAll')->name('university.blog');
Route::get('/university_blog_details/{id}', 'Blog\BlogController@blogDetails')->name('university.blog-details');

Route::get('/facility/{url}', 'FrontController@facilityDetails')->name('facility.details');

// About More
Route::get('/about-more', 'FrontController@aboutMore')->name('about_more');

// Annual Performance
Route::get('/annual-performance', 'FrontController@performance')->name('performance');
Route::get('/annual-performance-report/{id}', 'FrontController@performanceReport')->name('performance.report');



//Contact Us
Route::get('/contact-us', 'QueryController@contact')->name('contact-us');
Route::post('/contact_message', 'QueryController@contact_message')->name('contact_message');


//Content Details
Route::get('/content-details/{id}', 'FrontController@sliderContent')->name('sliderContent');

//About VC, Pro VC, Treasurer, Chancellor
Route::get('/about-vc', 'FrontController@aboutVC')->name('about-vc');
Route::get('/vc-message', 'FrontController@vcMessage')->name('vc-message');
Route::get('/about-pro-vc', 'FrontController@aboutProVC')->name('about-pro-vc');
Route::get('/about-treasurer', 'FrontController@aboutTreasurer')->name('about-treasurer');
Route::get('/about-chancellor', 'FrontController@aboutChancellor')->name('about-chancellor');

//URL like frontend menu
Route::get('ul/{url}', 'FrontController@usefulUrl')->name('useful_link');
Route::get('ql/{url}', 'FrontController@quickUrl')->name('quick_link');
Route::get('gt/{url}', 'FrontController@getInTouchUrl')->name('get_in_touch');
Route::get('fs/{url}', 'FrontController@fastServiceUrl')->name('fast_service');

Route::get('for_students', 'FrontController@forStudentsUrl')->name('for_students');
Route::get('offer_url', 'FrontController@offerUrl')->name('offer_url');
Route::get('feature_url', 'FrontController@featureUrl')->name('feature_url');
Route::get('training_url', 'FrontController@trainingUrl')->name('training_url');

// NOC
Route::get('/noc_all', 'FrontController@nocAll')->name('noc_all');
Route::get('/tender', 'FrontController@tenderAll')->name('tenders');
Route::get('/barta', 'FrontController@bartaAll')->name('bartas');
Route::get('/leave_permission', 'FrontController@leaveApplication')->name('leave_application');

Route::get('/academic_calender', 'FrontController@academicCalender')->name('academic_calender');

Route::get('/academic_curriculum', 'FrontController@academicCurriculum')->name('academic_curriculum');

// group
Route::name('faculties.')->group(base_path('routes/Frontend/faculty.php'));
Route::name('departments.')->group(base_path('routes/Frontend/department.php'));
Route::name('offices.')->group(base_path('routes/Frontend/office.php'));
Route::name('programs.')->group(base_path('routes/Frontend/program.php'));
Route::name('halls.')->group(base_path('routes/Frontend/hall.php'));
Route::name('members.')->group(base_path('routes/Frontend/member.php'));

Route::get('/news-events', 'FrontController@allNewsEvents')->name('all_news_events');
Route::get('/notices', 'FrontController@allNotices')->name('all_notices');
Route::get('/press-releases', 'FrontController@allPressReleases')->name('all_press_releases');
Route::get('/news-events-notices/{id}', 'FrontController@newsDetails')->name('news_details');

// Route::get('/events/{id}', 'FrontController@eventDetails')->name('event_details');
// Route::get('/notice/{id}', 'FrontController@noticeDetails')->name('notice_details');

Route::get('/press-release/{id}', 'FrontController@pressReleaseDetails')->name('press_releases_details');

Route::get('/transport-facilites', 'FrontController@transport')->name('transports');
Route::get('/career-job', 'FrontController@careerJob')->name('career_job');

Route::get('/ongoing-research', 'FrontController@ongoResearch')->name('ongoing_research');
Route::get('/completed-research', 'FrontController@completedResearch')->name('completed_research');

Route::get('/funded-research', 'FrontController@fundedResearch')->name('funded_research');

Route::get('/forms', 'FrontController@forms')->name('forms');

Route::get('/q/{menu?}', 'FrontController@MenuUrl')->name('menu_url');

// Unused ###################################################################################### Unused

// Route::get('/director-details/{id}', 'FrontController@directorContent')->name('directorContent');
Route::get('/director/{id}', 'FrontController@director')->name('director');
Route::get('/about/{id}', 'FrontController@about')->name('about');
Route::get('/facility/{id}', 'FrontController@facility')->name('facility');
Route::get('/activity/{id}', 'FrontController@activity')->name('activity');
Route::get('/advisor/{id}', 'FrontController@advisor')->name('advisor');
Route::get('news-all', 'FrontController@newsAll')->name('news-all');
Route::get('general-notice', 'FrontController@generalNotice')->name('general-notice');
Route::get('special-notice', 'FrontController@specialNotice')->name('special-notice');
Route::get('tender-notice', 'FrontController@tenderNotice')->name('tender-notice');
Route::get('news-single-page', 'FrontController@newsSinglePage')->name('news_single_page');
Route::get('/event/{id}', 'FrontController@event')->name('event');
Route::get('event-all', 'FrontController@eventAll')->name('event-all');
Route::get('/notice/{id}', 'FrontController@notice')->name('notice');
Route::get('notice-all', 'FrontController@noticeAll')->name('notice-all');
Route::get('training-enroll-all', 'FrontController@trainingEnrollAll')->name('training_enroll_all');


Route::get('/our_research/{id}', 'FrontController@ourResearch')->name('our_research');
Route::get('/our_development/{id}', 'FrontController@ourDevelopment')->name('our_development');
Route::get('/our_library/{id}', 'FrontController@ourLibrary')->name('our_library');
Route::get('/our_campus/{id}', 'FrontController@ourCampus')->name('our_campus');


Route::get('/oped', 'FrontController@oped')->name('oped');
Route::get('/ongoing-training', 'FrontController@ongoingTraining')->name('ongoing_training');
Route::get('/upcoming-training', 'FrontController@upcomingTraining')->name('upcoming_training');

Route::get('/cu-journal-policy', 'FrontController@cuJournalPolicy')->name('cu_journal_policy');
Route::post('/store-journal-policy', 'FrontController@storeJournalPolicy')->name('cu_journal_policy.store');

Route::get('/more/message', 'FrontController@headMessage')->name('more.message');

Route::get('/more/gallery', 'FrontController@moreGallery')->name('more.gallery');
Route::get('/more/research', 'FrontController@moreResearch')->name('more.research');
Route::get('/contact_us', 'FrontController@contactUs')->name('contact.us');
Route::post('/contact/message/store', 'FrontController@storeContactMessage')->name('contact.message.store');
//Ask Librarian
Route::get('/ask-librarian', 'FrontController@askLibrarian')->name('ask_librarian');
Route::post('/ask-librarian/store', 'FrontController@storeAskLibrarian')->name('ask_librarian.store');
//End Ask Librarian


//Academic Start

Route::get('/program-category/{slug}', 'FrontController@programCategory')->name('program_category');


Route::get('/undergraduate_Program', 'FrontController@underGraduate')->name('undergraduate');
Route::get('/graduate_Program', 'FrontController@graduate')->name('graduate');
Route::get('/emba_program', 'FrontController@embaProgram')->name('emba_program');
Route::get('/emca_program', 'FrontController@emcaProgram')->name('emca_program');
//Academic End


//Library Manangement
// Route::get('/ask_librarian', 'FrontController@askLibrarian')->name('ask_librarian');



Route::get('/blog_post', 'FrontController@blog_post')->name('blog_post');
Route::get('/cat_post', 'FrontController@catPost')->name('cat_post');
Route::get('/recent_post', 'FrontController@recentPost')->name('recent_post');
Route::get('/single_post/{id}', 'FrontController@Singlepost')->name('single_post');




//Journal Paper
Route::get('/journal-paper', 'FrontController@journalPaper')->name('journal_paper');


Route::get('/undergraduate_Program', 'FrontController@underGraduate')->name('undergraduate');



// Board of Trustees
Route::get('/board-of-trustees', 'FrontController@boardofTrustee')->name('board_of_trustees');

//menu

