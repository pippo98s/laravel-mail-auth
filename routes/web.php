<?php


Route::get('/', 'CategoryController@index') -> name('home.index');

Route::get('/show/{id}', 'PostController@postShow') -> name('post.show') -> middleware('auth');

Route::get('/category/post/{id}' , 'PostController@postCreate') -> name('post.create') -> middleware('auth');
Route::post('/category/post/{id}' , 'PostController@postStore') -> name('post.store') -> middleware('auth');

Route::get('/post/edit/{id}', 'PostController@postEdit') -> name('post.edit') -> middleware('auth');
Route::post('post/edit/{id}', 'PostController@postUpdate') -> name('post.update') -> middleware('auth');

Route::get('/category/edit/{id}' , 'CategoryController@categoryEdit') -> name('category.edit') -> middleware('auth');
Route::post('/category/edit/{id}' , 'CategoryController@categoryUpdate') -> name('category.update') -> middleware('auth');

Route::get('/post/delete/{id}', 'PostController@postDelete') -> name('post.delete') -> middleware('auth');
Route::get('/category/delete/{id}', 'CategoryController@categoryDelete') -> name('category.delete') -> middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index') -> name('home');
