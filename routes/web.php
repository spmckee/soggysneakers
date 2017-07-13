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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Admins
Route::group(['prefix' => 'admin'], function () {
   Route::get('login', 'AdminControllers\AuthController@initContent');
});

Route::get('/admin', 'AdminController@dashboard');

// Users
Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth');

// Judges
Route::get('/judging', 'JudgingController@dashboard');


// General Users
Route::get('/logout', 'Auth\LoginController@performLogout');



// Show
Route::get('/admin/events/{post}', 'PostsController@show');

// Save
Route::post('/admin/events', 'EventsController@store');

// FAQs
// Route::resource('faq', 'FaqController');
Route::get('/faq', 'FaqController@index');
Route::get('/admin/faq', 'FaqController@admin');
Route::get('/admin/faq/create', 'FaqController@create');
Route::get('/admin/faq/{category}', 'FaqController@show');

// Schools
Route::resource('/admin/schools', 'SchoolsController');

// Categories
// Route::resource('/admin/categories', 'CategoriesController');
Route::get('/admin/categories', 'CategoriesController@index');
Route::get('/admin/categories/create', 'CategoriesController@create');
Route::get('/admin/categories/{category}', 'CategoriesController@show');

// Entries
Route::get('/admin/entries', 'EntriesController@index');
Route::get('/admin/entries/{entry}', 'EntriesController@show');

// Single Pages
Route::get('/about-us', function (){
    return view('about');
});