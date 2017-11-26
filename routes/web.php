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
    return redirect('/films');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::model('films', 'App\Films');
Route::model('comments', 'App\Comments');

Route::resource('films', 'FilmController');
Route::bind('films', function($value, $route) {
    return App\Films::where('slug', $value)->first();
});
Route::get('/films', 'FilmController@index');
