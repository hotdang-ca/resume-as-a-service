<?php

// Route::get('/', 'PagesController@index');
Route::get('resumes/new', 'ResumesController@newResume');
Route::post('resumes', 'ResumesController@store');
Route::get('resumes/{slug}', 'ResumesController@get');

?>
