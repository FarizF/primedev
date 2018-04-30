<?php
use App\Reference;

// Main routes
Route::get('/', 'MainController@index');
Route::get('/portfolio', 'MainController@toPortfolio');

// References
Route::get('/references', 'ReferencesController@index');
Route::get('/references/{reference}', 'ReferencesController@single');

// Login
Route::get('/home', 'HomeController@index')->name('home');


// EXAMPLE QUERIES
// Route::get('/contact', function() {
//   return view('contact');
// });

// Route::get('/projects', function() {
//     return $projects;
// });

// DB class
// Route::get('/projects', function() {
//     $projects = DB::table('projects')->get();
//
//     return view('project.index', compact($projects));
// })
