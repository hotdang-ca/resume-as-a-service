<?php

// Route::get('/', 'PagesController@index');

// Create a new Resume
Route::get('resumes/new', 'ResumesController@newResume');
//  ||
// POST values for a New Resume
Route::post('resumes', 'ResumesController@store');
Route::post('resumes/edit/about', 'ResumesController@storeAbout');
Route::post('resumes/edit/education', 'ResumesController@newEducation');


// Form for editing a resume
Route::get('resumes/edit/{uuid}', 'ResumesController@editResume');

// Default getter of view-only resumes
Route::get('resumes/{slug}', 'ResumesController@get');

?>
