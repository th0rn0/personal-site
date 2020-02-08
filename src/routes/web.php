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
        "Tha's come too far..",
        "Blood and Stomach Pills",
        "Have you ever tried Proper Gravy",
        "Put big light on",
        "Eeee it's like Blackpool Luminations in 'ere",
        "Can you tell I'm from Yorkshire",
        "2s on that DevOps Pal",
	];
    return view('welcome')->withTagline($tagline[array_rand($tagline)]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
