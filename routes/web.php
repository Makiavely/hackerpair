<?php

/*Контроллер страницы hackerpair.test*/


/*
Route::get('events/{id}', 'EventsController@show');
Route::get('events/category/{category}/{subcategory?}','EventsController@category');
Route::get('events', 'EventsController@index');
*/

Route::get('/', 'WelcomeController@index');

Route::get('events/{id}', 'EventsController@show')->name('events.show');

Route::get('events', 'EventsController@index');
