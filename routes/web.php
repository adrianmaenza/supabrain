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
    return view('home.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/courses', 'courses.index')->name('courses');
Route::view('/about-us', 'about.index')->name('about');
Route::view('/contact-us', 'contact.index')->name('contact');
Route::view('/feedback', 'feedback.index')->name('feedback');

Route::get('profile', function(){
    return 'This is the profile';
});
