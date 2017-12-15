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
Route::get('/', 'PagesController@getHomePage');
//about us page
Route::get('/about', 'PagesController@getAboutPage');
//contact us 
Route::get('/contact','PagesController@getContactPage');
//get messages form to the controller MessagesController and to its submit method 
Route::get('/messages/','MessagesController@getMessages');
//get single message form to the controller MessagesController and to its submit method 
Route::get('/messages/{id}','MessagesController@getMessage');
//submit/post form to the controller MessagesController and to its submit method 
Route::post('/contact/submit/','MessagesController@submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password'=> 'Auth\PasswordController',
//]);
