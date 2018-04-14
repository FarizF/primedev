<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
  $references = DB::table('references')->latest()->get();

  return view('references.index', compact('references'));
});

Route::get('/references/{reference}', function($id) {
  $reference = DB::table('references')->find($id);

  return view('references.single', compact('reference'));
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();
