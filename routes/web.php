<?php


Route::get('/', 'CategoryController@index') -> name('home.index');

Route::get('/show/{id}', 'PostController@postShow') -> name('post.show');

Route::get('/category/post/{id}' , 'PostController@postCreate') -> name('post.create');
Route::post('/category/post/{id}' , 'PostController@postStore') -> name('post.store');

Route::get('/post/edit/{id}', 'PostController@postEdit') -> name('post.edit');
Route::post('post/edit/{id}', 'PostController@postUpdate') -> name('post.update');

Route::get('/category/edit/{id}' , 'CategoryController@categoryEdit') -> name('category.edit');
Route::post('/category/edit/{id}' , 'CategoryController@categoryUpdate') -> name('category.update');

Route::get('/post/delete/{id}', 'PostController@postDelete') -> name('post.delete');
Route::get('/category/delete/{id}', 'CategoryController@categoryDelete') -> name('category.delete');

