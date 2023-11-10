<?php

//Category
Route::get('post_category','PostCategoryController@index')->name('blog-management.post_category');
Route::get('post_category/add','PostCategoryController@addPostCategory')->name('blog-management.post_category.add');
Route::post('post_category/store','PostCategoryController@storePostCategory')->name('blog-management.post_category.store');
Route::get('post_category/edit/{id}','PostCategoryController@editPostCategory')->name('blog-management.post_category.edit');
Route::post('post_category/update/{id}','PostCategoryController@updatePostCategory')->name('blog-management.post_category.update');
Route::get('post_category/delete','PostCategoryController@deletePostCategory')->name('blog-management.post_category.delete');


//Manage Post
Route::get('manage_post','ManagePostController@index')->name('blog-management.blog_post');
Route::get('manage_post/add','ManagePostController@addBlogPost')->name('blog-management.blog_post.add');
Route::post('manage_post/store','ManagePostController@storeBlogPost')->name('blog-management.blog_post.store');
Route::get('manage_post/edit/{id}','ManagePostController@editBlogPost')->name('blog-management.blog_post.edit');
Route::post('manage_post/update/{id}','ManagePostController@updateBlogPost')->name('blog-management.blog_post.update');
Route::get('manage_post/delete','ManagePostController@deleteBlogPost')->name('blog-management.blog_post.delete');


//Manage Comment
Route::get('manage_comment','ManageCommentController@index')->name('blog-management.blog_comment');
Route::get('manage_comment/add','ManageCommentController@add')->name('blog-management.blog_comment.add');
Route::post('manage_comment/store','ManageCommentController@store')->name('blog-management.blog_comment.store');
Route::get('manage_comment/edit/{id}','ManageCommentController@edit')->name('blog-management.blog_comment.edit');
Route::post('manage_comment/update/{id}','ManageCommentController@update')->name('blog-management.blog_comment.update');
Route::get('manage_comment/delete','ManageCommentController@delete')->name('blog-management.blog_comment.delete');
