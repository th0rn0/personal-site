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

Route::post('/login', 'Auth\LoginController@login');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['noregistration']], function () {
    Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::post('/password/reset', 'Auth\ForgotPasswordController@reset')->name('password.update');
    Route::post('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/stream', 'HomeController@stream')->name('stream');

Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/projects/eventula', 'ProjectsController@eventula')->name('projects.eventula');
Route::get('/projects/site', 'ProjectsController@site')->name('projects.site');
Route::get('/projects/lanops', 'ProjectsController@lanops')->name('projects.lanops');
Route::get('/projects/smirkyisms', 'ProjectsController@smirkyisms')->name('projects.smirkyisms');


// Get all published posts
Route::get('blog', 'BlogController@getPosts');

// Get posts for a given tag
Route::get('tag/{slug}', 'BlogController@getPostsByTag');

// Get posts for a given topic
Route::get('topic/{slug}', 'BlogController@getPostsByTopic');

// Find a single post
Route::middleware('Canvas\Http\Middleware\Session')->get('{slug}', 'BlogController@findPostBySlug');
Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@getPosts')->name('blog.index');
    Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');
    Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
    Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
});
