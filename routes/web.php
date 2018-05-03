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
    return view('jennyswiftcreations');
});

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

Route::get('/hire', function()
{
    return view('hire');
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
