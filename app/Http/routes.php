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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('/privacy-policy', ['as' => 'privacy-policy', function()
{
	return view('privacy-policy');
}]);

Route::get('/reviews', function()
{
    return view('reviews');
});

Route::get('/credits', function()
{
    return view('credits');
});

Route::get('/contact', function()
{
    return view('contact');
});

Route::get('/about', function()
{
    return view('about');
});

Route::get('/technologies', function()
{
    return view('technologies');
});

Route::get('/experience', function()
{
    return view('experience');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
