<?php

Route::get('/',"PageController@Home");
Route::get('Home',"PageController@Home");
Route::get('Gallery',"PageController@Gallery");
Route::get('Contact',"PageController@Contact");
Route::get('AboutUs',"PageController@AboutUs");
Route::get('Services',"PageController@Services");
Route::get('Query',"PageController@Query");

Route::get('Computer',"ServiceController@Computer");
Route::get('InstallSoftware',"ServiceController@InstallSoftware");
Route::get('RemoteService',"ServiceController@RemoteService");
Route::get('CCTV',"ServiceController@CCTV");

