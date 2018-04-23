<?php
use App\Reference;

// Home
Route::get('/', 'MainController@index');


Route::get('/portfolio', function() {
  return view('portfolio');
});

// References
Route::get('/references', 'ReferencesController@index');
Route::get('/references/{reference}', 'ReferencesController@single');

Route::get('/about', function() {
    return view('about');
});

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
