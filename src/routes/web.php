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
	$tagline = [
        "Airsoft Dude.",
        "Devops Bro.",
        "Railgun God.",
        "Space Cmdr."
	];
    return view('welcome')->withTagline($tagline[array_rand($tagline)]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/eventula', 'ProjectsController@eventula')->name('projects.eventula');
Route::get('/projects/site', 'ProjectsController@site')->name('projects.site');
Route::get('/projects/lanops', 'ProjectsController@lanops')->name('projects.lanops');
