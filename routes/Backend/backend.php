<?php

Route::group(['middleware'=>['auth']],function(){
Route::get('/home', 'HomeController@index')->name('dashboard');
Route::group(['middleware'=>['permission']],function(){
    // Menu
    Route::prefix('menu')->group(base_path('routes/Backend/menu.php'));

    Route::post('/data/statuschange', 'DefaultController@statusChange')->name('table.status.change');
    Route::post('/data/delete', 'DefaultController@delete')->name('table.data.delete');
    Route::get('/sub/menu', 'DefaultController@SubMenu')->name('table.data.submenu');

    // Set Up
    Route::prefix('setup')->group(base_path('routes/Backend/setup.php'));

    // User
    Route::prefix('user')->group(base_path('routes/Backend/user.php'));

    // Project Management
    Route::prefix('project-management')->group(base_path('routes/Backend/projectManagement.php'));

    // Annual Performance
    Route::prefix('annual-performance')->group(base_path('routes/Backend/annualPerformance.php'));

    // Annual Calendar Routine
    Route::prefix('academic-routine')->group(base_path('routes/Backend/academicRoutine.php'));


    // University Transport
    Route::prefix('transports')->group(base_path('routes/Backend/transport.php'));

    // Hall
    Route::prefix('hall')->group(base_path('routes/Backend/hall.php'));

    // Frontend Menu
    Route::prefix('frontend-menu')->group(base_path('routes/Backend/frontendMenu.php'));

    // Member Management
    Route::prefix('member-management')->group(base_path('routes/Backend/memberManagement.php'));

    // Top Menu
    Route::prefix('top-menu')->group(base_path('routes/Backend/topMenu.php'));

    // Footer Menu
    Route::prefix('footer-menu')->group(base_path('routes/Backend/footerMenu.php'));

    // Library Management
    Route::prefix('library-management')->group(base_path('routes/Backend/libraryManagement.php'));

    // Blog Management
    Route::prefix('blog-management')->group(base_path('routes/Backend/blogManagement.php'));


    Route::get('/leave', 'LeaveController@index')->name('manage_leave');
    Route::get('/leave/add', 'LeaveController@add')->name('manage_leave.add');
    Route::post('/leave/store', 'LeaveController@store')->name('manage_leave.store');
    Route::get('/leave/edit/{id}', 'LeaveController@edit')->name('manage_leave.edit');
    Route::post('/leave/update/{id}', 'LeaveController@update')->name('manage_leave.update');
    Route::get('/leave/delete', 'LeaveController@delete')->name('manage_leave.delete');
    Route::get('member-wise-deptOffice', 'LeaveController@MemberWiseDeptOffice')->name('member_wise_deptOffice');


    Route::prefix('board-of-trustees')->group(function(){
        Route::get('list','BoardofTrusteeController@list')->name('board_of_trustee.list');
        Route::get('add','BoardofTrusteeController@add')->name('board_of_trustee.add');
        Route::post('store','BoardofTrusteeController@store')->name('board_of_trustee.store');
        Route::get('edit/{id}','BoardofTrusteeController@edit')->name('board_of_trustee.edit');
        Route::post('update/{id}','BoardofTrusteeController@update')->name('board_of_trustee.update');
        Route::get('delete','BoardofTrusteeController@destroy')->name('board_of_trustee.delete');

    });

    // Start - Academic
    Route::prefix('academic')->group(function(){
        Route::get('list','AcademicController@list')->name('academic.list');
        Route::get('add','AcademicController@add')->name('academic.add');
        Route::post('store','AcademicController@store')->name('academic.store');
        Route::get('edit/{id}','AcademicController@edit')->name('academic.edit');
        Route::post('update/{id}','AcademicController@update')->name('academic.update');
        Route::get('delete','AcademicController@destroy')->name('academic.delete');
        Route::get('department-wise-program','AcademicController@DepartmentWiseProgram')->name('department_wise_program');
    });
    // End - Academic
    Route::prefix('governing-body')->group(function(){
        Route::get('governing-body/list','GoverningBodyController@list')->name('governing_body.list');
        Route::get('governing-body/add','GoverningBodyController@add')->name('governing_body.add');
        Route::post('governing-body/store','GoverningBodyController@store')->name('governing_body.store');
        Route::get('governing-body/edit/{id}','GoverningBodyController@edit')->name('governing_body.edit');
        Route::post('governing-body/update/{id}','GoverningBodyController@update')->name('governing_body.update');
        Route::get('governing-body/delete','GoverningBodyController@destroy')->name('governing_body.delete');

    });

});

});
