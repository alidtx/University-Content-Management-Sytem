<?php

Route::get('/all-user', 'UserController@list')->name('user');
Route::get('/all-users', 'UserController@list')->name('setup.manage_faculty');
Route::get('/all-users', 'UserController@list')->name('setup.manage_department');
// Route::get('/all-users', 'UserController@list')->name('setup.manage_faculty');
Route::get('/all-users', 'UserController@list')->name('setup.manage_department');

Route::get('/list','UserController@list')->name('user.list');
Route::get('/add','UserController@add')->name('user.add');
Route::post('/store','UserController@store')->name('user.store');
Route::get('/edit/{id}','UserController@edit')->name('user.edit');
Route::post('/update/{id}','UserController@update')->name('user.update');
Route::post('/delete','UserController@destroy')->name('user.delete');

Route::get('/role','Menu\RoleController@index')->name('user.role');
Route::post('/role/store','Menu\RoleController@storeRole')->name('user.role.store');
Route::get('/role/edit','Menu\RoleController@getRole')->name('user.role.edit');
Route::post('/role/update/{id}','Menu\RoleController@updateRole')->name('user.role.update');
Route::post('/role/delete','Menu\RoleController@deleteRole')->name('user.role.delete');

Route::get('/permission','Menu\MenuPermissionController@index')->name('user.permission');
Route::get('/permission/store','Menu\MenuPermissionController@storePermission')->name('user.permission.store');

//Add Member to User
Route::get('/add-member-to-user','UserController@addMemberToUser')->name('user.add_member_to_user');
Route::post('/store-member-to-user','UserController@storeMemberToUser')->name('user.store_member_to_user');
Route::get('/edit-member-to-user/{id}','UserController@editMemberToUser')->name('user.edit_member_to_user');
Route::post('/update-member-to-user/{id}','UserController@updateMemberToUser')->name('user.update_member_to_user');
//ajax
Route::get('member-wise-email','UserController@memberWiseEmail')->name('member_wise_email');
Route::get('/update-member-profile','UserController@updateMemberProfile')->name('user.update_member_profile');

//Department

Route::get('department','DepartmentController@index')->name('user.department');
Route::get('department/add','DepartmentController@addDepartment')->name('user.department.add');
Route::post('department/store','DepartmentController@storeDepartment')->name('user.department.store');
Route::get('department/edit/{id}','DepartmentController@editDepartment')->name('user.department.edit');
Route::post('department/update/{id}','DepartmentController@updateDepartment')->name('user.department.update');
Route::get('department/delete','DepartmentController@deleteDepartment')->name('user.department.delete');

//Project

Route::get('project','ProjectController@index')->name('user.project');
Route::get('project/add','ProjectController@addProject')->name('user.project.add');
Route::post('project/store','ProjectController@storeProject')->name('user.project.store');
Route::get('project/edit/{id}','ProjectController@editProject')->name('user.project.edit');
Route::post('project/update/{id}','ProjectController@updateProject')->name('user.project.update');
Route::get('project/delete','ProjectController@deleteProject')->name('user.project.delete');
