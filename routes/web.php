<?php
use App\Reference;

// Admin
Route::group(['prefix' => 'cms', 'as' => 'cms.', 'middleware' => 'auth'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'AdminController@index']);

    // Portfolio
    Route::group(['prefix' => 'manageportfolio', 'as' => 'manageportfolio.', 'middleware' => 'auth'], function() {
      Route::get('/', ['as' => 'index', 'uses' => 'AdminController@indexPortfolio']);
      Route::get('add', ['as' => 'add', 'uses' => 'AdminController@addProjectGet']);
      Route::get('edit', ['as' => 'edit', 'uses' => 'AdminController@editProjectGet']);

      Route::post('add', ['as' => 'add', 'uses' => 'AdminController@addProject']);
      Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'AdminController@deleteProject']);
      Route::patch('edit', ['as' => 'edit', 'uses' => 'AdminController@editProject']);
    });

    // Employer
    Route::group(['prefix' => 'manageemployers', 'as' => 'manageemployers.', 'middleware' => 'auth'], function() {
      Route::get('/', ['as' => 'index', 'uses' => 'AdminController@indexEmployers']);
      Route::get('add', ['as' => 'add', 'uses' => 'AdminController@addEmployerGet']);

      Route::post('add', ['as' => 'add', 'uses' => 'AdminController@addEmployer']);
      Route::delete('delete', ['as' => 'delete', 'uses' => 'AdminController@deleteEmployer']);
    });

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
