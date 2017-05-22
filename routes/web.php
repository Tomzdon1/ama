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
Route::get('/', 'SitesController@index');

Route::get('/add', 'SitesController@add')->middleware('auth');
Route::post('/save', [
    'uses' => 'SitesController@save',
    'as' => 'sites.save'
]);
Route::get('/site/{site}',
[
    'uses' => 'SitesController@show',
    'as' => 'sites.show'
]

)->middleware('auth');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
