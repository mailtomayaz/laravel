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

//home page
Route::get('/', function () {
    return view('home');
});

//about us page
Route::get('/about', function () {
    return view('about');
});

//contact us 
Route::get('/contact', function () {
    return view('contact');
});

//submit/post form to the controller MessagesController and to its submit method 
Route::post('/contact/submit/','MessagesController@submit');
