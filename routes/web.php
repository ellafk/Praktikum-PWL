<?php

Route::get('/', function(){
	return view('welcome');
});

Route::get('/aboutKuis', 'aboutKuisController@aboutKuis');

Route::get('/articleKuis/{id}', 'articleKuisController@articleKuis');
Route::get('/kuis', 'kuisController@kuis');
Route::get('/homeKuis', 'homeKuisController@index');
Route::get('/contactKuis', 'contactController@contactKuis');
Route::get('/tentangKuis', 'tentangKuisController@tentangKuis');
// --orm--
Auth::routes();
Route::get('/home', 'kuisController@kuis')->name('home');
Route::get('/artic', 'homeKuisController@index')->name('artic');
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/article/add','ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');

