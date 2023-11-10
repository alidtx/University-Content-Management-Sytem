<?php

Route::get('clear_cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Cache is cleared';
});

Route::get('/locale/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->name('locale');

// Search

Route::get('/search', 'Frontend\FrontController@Search')->name('search');

Route::get('/read.more.news/{id}', function () {})->name('read.more.news');

Route::get('/linkstorage', function () {

    Artisan::call('storage:link');

});

// Frontend

// Route::get('/','Frontend\FrontController@home')->name('home');
// Route::get('/demo','Frontend\FrontController@home')->name('site-setting.director');

// Route::get('/menu', 'Frontend\FrontController@MenuUrl')->name('menu_url');

// Route::get('/all-department','Frontend\FrontController@allDepartment')->name('all-department');

/* Faculty */
Route::get('/faculty_academy_menu/{id}', 'Frontend\FrontController@academyFacultyMenu')->name('faculty-academy-menu');
Route::get('/faculty_admission_menu/{id}', 'Frontend\FrontController@admissionFacultyMenu')->name('faculty-admission-menu');
Route::get('/faculty_offices_menu/{id}', 'Frontend\FrontController@officesFacultyMenu')->name('faculty-offices-menu');
Route::get('/faculty_research_menu/{id}', 'Frontend\FrontController@researchFacultyMenu')->name('faculty-research-menu');
Route::get('/faculty_campuslife_menu/{id}', 'Frontend\FrontController@campuslifeFacultyMenu')->name('faculty-campuslife-menu');

Route::get('/academy_menu/{id}', 'Frontend\FrontController@academyMenu')->name('academy-menu');
Route::get('/admission_menu/{id}', 'Frontend\FrontController@admissionMenu')->name('admission-menu');
Route::get('/offices_menu/{id}', 'Frontend\FrontController@officesMenu')->name('offices-menu');
Route::get('/research_menu/{id}', 'Frontend\FrontController@researchMenu')->name('research-menu');
Route::get('/campuslife_menu/{id}', 'Frontend\FrontController@campuslifeMenu')->name('campuslife-menu');

// Route::get('/department-details/{id}','Frontend\FrontController@departmentDetails')->name('department-details');

// Route::get('/facility-all','Frontend\FrontController@allFacility')->name('allfacility');
// Route::get('/faculty-details/{id}','Frontend\FrontController@facultyDetails')->name('faculty.details');

// Route::get('/about-more','Frontend\FrontController@aboutMore')->name('about_more');

// Route::get('/cu-office','Frontend\FrontController@cuOffice')->name('cu-office');

// Route::get('/content-details/{id}','Frontend\FrontController@sliderContent')->name('sliderContent');

// Route::get('/demo-page', 'Frontend\FrontController@demoPage')->name('demo');

/* //Office Frontend Start
Route::get('/all-offices', 'Frontend\FrontController@alloffices')->name('alloffice');
Route::get('/office-details/{id}','Frontend\FrontController@officeDetails')->name('office-details');
//Office Frontend End
 */
/*
//Officers  profile Frontend Start
Route::get('/officer_profile', 'Frontend\FrontController@officerProfile')->name('officer_profile');
Route::get('/officer_profile_details/{id}','Frontend\FrontController@officerProfile')->name('officer_profile_details');
////Officers Member profile Frontend End

//Faculty Member profile Frontend Start
Route::get('/nember_profile', 'Frontend\FrontController@facultyMemberProfile')->name('nember_profile');
Route::get('/nember_profile_details/{id}','Frontend\FrontController@officeDetails')->name('nember_profile_details');
//Faculty Member profile Frontend End
 */
/*
//Dean Member profile Frontend Start
Route::get('/dean_profile', 'Frontend\FrontController@deanMemberProfile')->name('dean_profile');
//Dean Member profile Frontend End

//Dean Member profile Frontend Start
Route::get('/office_head', 'Frontend\FrontController@headOffices')->name('office_head');
//Dean Member profile Frontend End


//Dean Member profile Frontend Start
Route::get('/department_head', 'Frontend\FrontController@departmentHead')->name('department_head');
//Dean Member profpall-news-eventsle Frontend End

//Dean Member profile Frontend Start
Route::get('/hall_provost', 'Frontend\FrontController@hallProvost')->name('hall_provost');
//Dean Member profile Frontend End

 */
//Hall Frontend Start
// Route::get('/all_hall', 'Frontend\FrontController@allHall')->name('all_hall');
// Route::get('/hall_details/{id}','Frontend\FrontController@allHallDetail')->name('hall_details');
//hall Frontend End

// Route::get('/all-program', 'Frontend\FrontController@allProgram')->name('all-program');
// Route::get('/program-details/{id}','Frontend\FrontController@programDetails')->name('program-details');

// Route::get('/annual-performance', 'Frontend\FrontController@performance')->name('performance');
// Route::get('/annual-performance-report/{id}', 'Frontend\FrontController@performanceReport')->name('performance.report');

// Route::get('/office-stuff', 'Frontend\FrontController@officestuff')->name('officeStuff');

// Syndicate Member Frontend
// Route::get('/syndicate-member', 'Frontend\FrontController@syndicateMember')->name('syndicate-member');
// Route::get('/board-of-trustees','Backend\BoardofTrusteeController@frontend')->name('board_of_trustees');

// Route::get('/office-members', 'Frontend\FrontController@officeMember')->name('officeMember');
// Route::get('/academic-council', 'Frontend\FrontController@academicCouncil')->name('academic-council');
// Route::get('/contact-us', 'Frontend\FrontController@contact')->name('contact-us');

// Route::get('/director-details/{id}','Frontend\FrontController@directorContent')->name('directorContent');
// Route::get('/about-vc','Frontend\FrontController@aboutVC')->name('about-vc');
// Route::get('/about-pro-vc','Frontend\FrontController@aboutProVC')->name('about-pro-vc');
// Route::get('/about-treasurer','Frontend\FrontController@aboutTreasurer')->name('about-treasurer');
// Route::get('/about-chancellor','Frontend\FrontController@aboutChancellor')->name('about-chancellor');

/*
Route::get('/science-faculty','Frontend\FrontController@viewFacultyScience')->name('viewFaculty');
Route::get('/art-faculty','Frontend\FrontController@viewFacultyArt')->name('viewFacultyArt');
Route::get('/social-faculty','Frontend\FrontController@viewFacultySocial')->name('viewFacultySocial');
Route::get('/law-faculty','Frontend\FrontController@viewFacultyLaw')->name('viewFacultyLaw');
Route::get('/business-studies-faculty','Frontend\FrontController@viewFacultyBusiness')->name('viewFacultyBusiness');
Route::get('/engineering-faculty','Frontend\FrontController@viewFacultyEngineering')->name('viewFacultyEngineering');

 */

//URL like frontend menu
// Route::get('useful_link', 'Frontend\FrontController@usefulUrl')->name('useful_link');
// Route::get('quick_link', 'Frontend\FrontController@quickUrl')->name('quick_link');
// Route::get('for_students', 'Frontend\FrontController@forStudentsUrl')->name('for_students');
// Route::get('get_in_touch', 'Frontend\FrontController@getInTouchUrl')->name('get_in_touch');
// Route::get('fast_service', 'Frontend\FrontController@fastServiceUrl')->name('fast_service');
// Route::get('offer_url', 'Frontend\FrontController@offerUrl')->name('offer_url');
// Route::get('feature_url', 'Frontend\FrontController@featureUrl')->name('feature_url');
// Route::get('training_url', 'Frontend\FrontController@trainingUrl')->name('training_url');

//End URL like frontend menu
// Route::get('/director/{id}','Frontend\FrontController@director')->name('director');
// Route::get('/about/{id}','Frontend\FrontController@about')->name('about');
// Route::get('/facility/{id}','Frontend\FrontController@facility')->name('facility');
// Route::get('/activity/{id}','Frontend\FrontController@activity')->name('activity');
// Route::get('/advisor/{id}','Frontend\FrontController@advisor')->name('advisor');
// Route::get('/news/{id}','Frontend\FrontController@news')->name('news');
// Route::get('news-all','Frontend\FrontController@newsAll')->name('news-all');
// Route::get('general-notice','Frontend\FrontController@generalNotice')->name('general-notice');
// Route::get('special-notice','Frontend\FrontController@specialNotice')->name('special-notice');
// Route::get('tender-notice','Frontend\FrontController@tenderNotice')->name('tender-notice');
// Route::get('news-single-page','Frontend\FrontController@newsSinglePage')->name('news_single_page');
// Route::get('/event/{id}','Frontend\FrontController@event')->name('event');
// Route::get('event-all','Frontend\FrontController@eventAll')->name('event-all');
// Route::get('/notice/{id}','Frontend\FrontController@notice')->name('notice');
// Route::get('notice-all','Frontend\FrontController@noticeAll')->name('notice-all');
// Route::get('training-enroll-all','Frontend\FrontController@trainingEnrollAll')->name('training_enroll_all');
// Route::get('/noc_all','Frontend\FrontController@nocAll')->name('noc_all');

Route::get('library-front', 'Backend\LibrarySliderController@libraryFront')->name('library_front');
Route::get('library-subject-wise-book', 'Backend\LibrarySliderController@librarySubjectWiseBook')->name('library_subject_wise_book');
Route::get('library-book-pdf/{id}', 'Backend\LibrarySliderController@view_library_book_pdf')->name('view_library_book_pdf');
Route::get('library-news/{id}', 'Backend\LibraryNewsController@singleLibraryNews')->name('single_library_news');
Route::get('library-all-news', 'Backend\LibraryNewsController@libraryAllNews')->name('library_all_news');

// Route::get('/our_research/{id}','Frontend\FrontController@ourResearch')->name('our_research');
// Route::get('/our_development/{id}','Frontend\FrontController@ourDevelopment')->name('our_development');
// Route::get('/our_library/{id}','Frontend\FrontController@ourLibrary')->name('our_library');
// Route::get('/our_campus/{id}','Frontend\FrontController@ourCampus')->name('our_campus');

// Route::get('/ongoing-research','Frontend\FrontController@ongoingResearch')->name('ongoing_research');
// Route::get('/completed-research','Frontend\FrontController@completedResearch')->name('completed_research');
// Route::get('/oped','Frontend\FrontController@oped')->name('oped');
// Route::get('/ongoing-training','Frontend\FrontController@ongoingTraining')->name('ongoing_training');
// Route::get('/upcoming-training','Frontend\FrontController@upcomingTraining')->name('upcoming_training');

// Route::get('/cu-journal-policy','Frontend\FrontController@bigmJournalPolicy')->name('cu_journal_policy');
// Route::post('/store-journal-policy','Frontend\FrontController@storeJournalPolicy')->name('cu_journal_policy.store');

// Route::get('/more/message','Frontend\FrontController@headMessage')->name('more.message');

// Route::get('/more/gallery','Frontend\FrontController@moreGallery')->name('more.gallery');
// Route::get('/more/research','Frontend\FrontController@moreResearch')->name('more.research');
// Route::get('/contact_us','Frontend\FrontController@contactUs')->name('contact.us');
// Route::post('/contact/message/store','Frontend\FrontController@storeContactMessage')->name('contact.message.store');
//Ask Librarian
// Route::get('/ask-librarian','Frontend\FrontController@askLibrarian')->name('ask_librarian');
// Route::post('/ask-librarian/store','Frontend\FrontController@storeAskLibrarian')->name('ask_librarian.store');
//End Ask Librarian

Route::get('/location', 'Backend\LocationController@location')->name('location');
Route::get('/career/jobs', 'Backend\CareerController@careerJobs')->name('career_jobs');
Route::get('/career/jobs/view/{id}', 'Backend\CareerController@careerJobsView')->name('career_jobs_view');
Route::get('/gallery', 'Backend\PhotoGalleryController@photoGallery')->name('gallery');
Route::get('/video/gallery', 'Backend\VideoGalleryController@videoGallery')->name('video.gallery');
Route::get('/research/detail/{id}', 'Frontend\FrontController@Research')->name('research.detail');

Route::get('/governing-body', 'Backend\GoverningBodyController@frontend')->name('governing_body');
Route::get('/member-to-employee', 'Backend\MemberToEmployeeController@frontendAll')->name('member_to_employee_frontend');
Route::get('/member-to-employee/bigm', 'Backend\MemberToEmployeeController@frontendFilterBigm')->name('member_to_employee_frontend.bigm');
Route::get('/member-to-employee/project', 'Backend\MemberToEmployeeController@frontendFilterProject')->name('member_to_employee_frontend.project');

Route::get('/members', 'Backend\MemberController@frontend')->name('members');
Route::get('/member/profile/{id}', 'Backend\MemberController@memberProfileFrontend')->name('member.profile');

Route::get('/faculty-members', 'Backend\MemberToCourseController@facultyMembers')->name('faculty_members');
Route::get('/faculty-members-type-{id}', 'Backend\MemberToCourseController@facultyMembersTypewise')->name('type_wise_faculty_members');
// Route::get('/noc-office-orders','Backend\OfficeOrderController@frontend')->name('noc.office.order');

Route::get('/partnership/{id}', 'Frontend\FrontController@partnership')->name('partnership');
Route::get('/offer/{id}', 'Frontend\FrontController@offer')->name('offer');

// Blog Start
Route::get('/blog/login', 'Frontend\Blog\BlogController@blogLogin')->name('blog');
Route::get('/blog/register', 'Frontend\Blog\BlogController@blogRegister')->name('blog');
Route::get('/blog', 'Frontend\Blog\BlogController@blog')->name('blog');
Route::get('/blog/details', 'Frontend\Blog\BlogController@blogDetails')->name('blog.details');
// Blog End

// Route::get('/login',function(){
// 	return redirect()->route('login');
// });

//Reset Password
Route::get('reset/password', 'Backend\PasswordResetController@resetPassword')->name('reset.password');
Route::post('check/email', 'Backend\PasswordResetController@checkEmail')->name('check.email');
Route::get('check/name', 'Backend\PasswordResetController@checkName')->name('check.name');
Route::get('check/code', 'Backend\PasswordResetController@checkCode')->name('check.code');
Route::post('submit/check/code', 'Backend\PasswordResetController@submitCode')->name('submit.check.code');
Route::get('new/password', 'Backend\PasswordResetController@newPassword')->name('new.password');
Route::post('store/new/password', 'Backend\PasswordResetController@newPasswordStore')->name('store.new.password');

Auth::routes();

Route::namespace('Frontend\Blog')
    ->prefix('blog_user')
    ->group(function () {
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('blog_user.login');
        Route::post('login', 'Auth\LoginController@login')->name('blog_user.login');
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('blog_user.register');
        Route::post('register', 'Auth\RegisterController@register')->name('blog_user.register');

        //Blog User Reset Password
        Route::get('reset/password', 'Auth\PasswordResetController@resetPassword')->name('blog_user.reset.password');
        Route::post('check/email', 'Auth\PasswordResetController@checkEmail')->name('blog_user.check.email');
        Route::get('check/name', 'Auth\PasswordResetController@checkName')->name('blog_user.check.name');
        Route::get('check/code', 'Auth\PasswordResetController@checkCode')->name('blog_user.check.code');
        Route::post('submit/check/code', 'Auth\PasswordResetController@submitCode')->name('blog_user.submit.check.code');
        Route::get('new/password', 'Auth\PasswordResetController@newPassword')->name('blog_user.new.password');
        Route::post('store/new/password', 'Auth\PasswordResetController@newPasswordStore')->name('blog_user.store.new.password');

        Route::middleware('auth:blog_user')->group(function () {
            Route::get('/home', 'BlogController@home')->name('blog_user.home');
            Route::post('logout', 'Auth\LoginController@logout')->name('blog_user.logout');

            Route::post('/blog/post/store', 'BlogController@storeBlogPost')->name('blog_user.store_blog_post');

            Route::get('/blog/post/edit/{id}', 'BlogController@editBlogPost')->name('blog_user.edit_blog_post');
            Route::post('/blog/post/update/{id}', 'BlogController@updateBlogPost')->name('blog_user.update_blog_post');

            Route::get('/blog/post/delete', 'BlogController@deleteBlogPost')->name('blog_user.delete_blog_post');

            Route::get('/blog/post/all', 'BlogController@allBlogPost')->name('blog_user.all_blog_post');

            Route::get('/edit/profile/{id}', 'BlogController@editProfile')->name('blog_user.edit_profile');
            Route::post('/update/profile/{id}', 'BlogController@updateProfile')->name('blog_user.update_profile');

            Route::post('/blog/post/insert_comment', 'BlogController@insertComment')->name('blog_user.insert_comment');

            //ajax
            Route::post('/blog/post/update_like_count', 'BlogController@updateLikeCount')->name('blog_user.update_like_count');
        });

        Route::get('/blog', 'BlogController@blog')->name('blog');
        Route::get('/blog/details/{id}', 'BlogController@blogDetails')->name('blog.details');
    });

//Dean Member profile Frontend Start
// Route::get('/dean_profile', 'Frontend\FrontController@deanMemberProfile')->name('dean_profile');
// Route::get('/dean_profile_details/{id}', 'Frontend\FrontController@deanMemberProfileDetails')->name('dean_profile_details');
//Dean Member profile Frontend End

//Dean Member profile Frontend Start
// Route::get('/department_head', 'Frontend\FrontController@departmentHead')->name('department_head');
// Route::get('/department_head_details/{id}', 'Frontend\FrontController@departmentHeadDetails')->name('department_head_details');
//Dean Member profile Frontend End

//Officers  profile Frontend Start
// Route::get('/officer_profile', 'Frontend\FrontController@officerProfile')->name('officer_profile');
// Route::get('/officer_profile_details/{id}','Frontend\FrontController@officerProfileDetails')->name('officer_profile_details');
////Officers Member profile Frontend End

//Faculty Member profile Frontend Start
// Route::get('/nember_profile', 'Frontend\FrontController@facultyMemberProfile')->name('nember_profile');
// Route::get('/faculty_member_details/{id}','Frontend\FrontController@facultyMemberProfileDetails')->name('faculty_member_details');
//Faculty Member profile Frontend End

//Dean Member profile Frontend Start
// Route::get('/office_head', 'Frontend\FrontController@headOffices')->name('office_head');
// Route::get('/office_head_details/{id}', 'Frontend\FrontController@officeHeadDetails')->name('office_head_details');
//Dean Member profile Frontend End
