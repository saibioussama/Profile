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

Route::get('/profile',function(){
    return View('profile.index');
});

Route::get('/', function () {
    return view('profile.index');
});

Auth::routes();

Route::get('/home',function(){
    return View('profile.index');
});

Route::resource('/sections','sectionsController')->middleware('auth');

Route::resource('/subjects','subjectsController')->middleware('auth');

Route::resource('/cours','coursController')->middleware('auth');

Route::get('/messages',function(){
    return View('messages.index');
})->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');


Route::post('/messages/store','messagesController@store');