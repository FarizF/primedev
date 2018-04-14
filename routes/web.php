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

Route::get('/references', function() {
  $references = Reference::all();

  return view('references.index', compact('references'));
});

Route::get('/references/{reference}', function($id) {
  $reference = Reference::find($id);

  return view('references.single', compact('reference'));
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();
