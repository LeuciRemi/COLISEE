<?php


Route::get('/getLogin', 'VisiteurController@getLogin');

Route::post('/login', 'VisiteurController@signIn');




/* * *********************************************************************** */
/* * ***********************  DECONNEXION ********************************** */
/* * *********************************************************************** */


//déconnexion des vsiteurs
Route::get('/getLogout', 'VisiteurController@signOut');

//déconnexion des personnels

//déconnexion des vsiteurs
