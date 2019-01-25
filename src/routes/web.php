<?php
Route::group(['namespace'=>'Kaleem\Contact\Http\Controllers'], function(){

Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@send');
});

// Route::get('/contact', function(){
// 	return view('contact::contact');
// });

// Route::get('/contact/contact', function(){
// 	return 'Hi, this is from package route file,contact';
// });