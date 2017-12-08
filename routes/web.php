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

Route::get('/profile',function(){
    return View('profile.index');
});




Route::resource('/sections','sectionsController');
// ->middleware('auth');

Route::resource('/subjects','subjectsController');
// ->middleware('auth');

Route::resource('/cours','coursController');
// ->middleware('auth');

Route::get('/messages',function(){
    return View('messages.index');
})->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');


Route::post('/messages/store','messagesController@store');


Route::get('/home',function ($id=0) {
    if($id == 0)
        $cours = App\Cour::all();
    else
        $cours = App\Cour::all()->where('subject_id',App\Section::all()->where('id',$id)->first()->id);
    return view('cv.index')->with([
        'cours'=>$cours,
        'section_id'=>$id
    ]);
});

Route::get('/{id?}', function ($id=0) {
    if($id == 0)
        $cours = App\Cour::all();
    else
        $cours = App\Cour::all()->where('subject_id',App\Section::all()->where('id',$id)->first()->id);
    return view('cv.index')->with([
        'cours'=>$cours,
        'section_id'=>$id
    ]);
});