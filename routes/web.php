<?php



Route::get('/getLogin', 'VisiteurController@getLogin');
Route::post('/login', 'VisiteurController@signIn');
Route::get('/getLogout', 'VisiteurController@signOut');