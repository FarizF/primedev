<?php
use App\Reference;

// Admin
Route::group(['prefix' => 'cms', 'as' => 'cms.', 'middleware' => 'auth'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);
    Route::get('/editportfolio', 'AdminController@editPortfolio');
});

// Main routes
Route::get('/', 'MainController@index');

// References
Route::get('references', 'ReferencesController@index');
Route::get('references/{reference}', 'ReferencesController@single');

// Portfolio
Route::get('portfolio', 'PortfolioController@index');
//Route::get('/portfolio', 'PortfolioController@single')

// Login
//Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes();
