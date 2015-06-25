<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function () {
//     return view('test.index');
// });

Route::model('test', 'Test');

// Provide controller methods with object instead of ID
Route::model('tasks', 'Tasks');
Route::model('projects', 'Project');
 
// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
	return App\Tasks::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});
 
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
Route::resource('test', 'TestController');