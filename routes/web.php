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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', 'HomeController@index');
Route::get('/events', 'EventsController@index');
Route::get('/entries', 'EntriesController@index');    

Auth::routes();

// Authentication Routes...
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout');

// // Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm');
// Route::post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

// ## Admin ##
Route::get('/admin', 'Admin\AdminController@dashboard');

Route::get('/admin/events', 'Admin\EventsController@index');
Route::get('/admin/entries', 'Admin\EntriesController@index');

// Create
Route::get('/admin/events/create', 'Admin\EventsController@create');

// Edit
// Route::post('/admin/events/{id}/edit', 'Admin\EventsController@edit');

// Update
// Route::post('/admin/events/{id}/edit', 'Admin\EventsController@edit');

// Delete
// Route::patch('/admin/{id}', 'Admin\EventsController@update');

// Show
Route::get('/admin/events/{post}', 'Admin\PostsController@show');

// Save
Route::post('/admin/events', 'Admin\EventsController@store');
