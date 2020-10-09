<?php

Route::get('/', function(){
	return view('welcome');
});
// Route::get('/hello', function(){
// 	return view('hello', ['name'=>'Ella']);
// });
//Route::get('/home', 'homeController@home');
// Route::get('/about', 'aboutController@about');
// Route::get('/articles/{page}', 'articlesController@articles');
// Route::get('/home/{page}', 'homeController@home1');

 Route::get('/aboutKuis', 'aboutKuisController@aboutKuis');

//Route::get('/master', 'masterController@master');
// Route::get('/home', 'homeController@contact');
Route::get('/articleKuis/{id}', 'articleKuisController@articleKuis');
Route::get('/kuis', 'kuisController@kuis');
Route::get('/homeKuis', 'homeKuisController@homeKuis');
Route::get('/contactKuis', 'contactController@contactKuis');
Route::get('/tentangKuis', 'tentangKuisController@tentangKuis');

// Route::get('/kuis', function(){
// 	return view('hp');
// });

Auth::routes();
Route::get('/home', 'homeKuisController@index')->name('home');
