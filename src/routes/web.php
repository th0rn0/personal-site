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
        "Blood and Stomach Pills",
        "Eeee it's like Blackpool Luminations in 'ere",
        "2s on that DevOps Pal",
        "Airsoft Dude, Devops Bro.",
        "Railgun God.",
        "Space Dude."
	];
    return view('welcome')->withTagline($tagline[array_rand($tagline)]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
