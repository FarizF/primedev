<?php
use App\Reference;

Route::get('/', function () {
  return view('welcome', [
    'name' => 'Fariz'
  ]);
});

Route::get('/about', function() {
  return view('about');
});

Route::get('/portfolio', function() {
  return view('portfolio');
});

Route::get('/projects', function() {
  return view('projects');
});

Route::get('/references', 'ReferencesController@index');
Route::get('/reference/{reference}', 'ReferencesController@single');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/contact', function() {
//   return view('contact');
// });

// Auth::routes();
