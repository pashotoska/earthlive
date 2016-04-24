<?php

//get route
Route::get('/', 'HomeController@index');
Route::get('/feedbacks','HomeController@getFeedbacks');
Route::get('/temperatures','HomeController@getTemperatures');
Route::get('/rainfalls','HomeController@getRainfalls');
Route::get('/forests','HomeController@getForests');

//post route
Route::post('/','HomeController@feedback');
