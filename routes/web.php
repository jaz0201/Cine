<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// route ::resource('nombreRouter','Nombrecontrolador')
//Route ::resource('movies','MovieController');
Route::get('/movies.viewTable','MovieController@viewTable');
//Route::resource('consumables','ConsumablesController');
Route::resources([
    'movies' => 'MovieController',
    'consumables' => 'ConsumableController',
    'rooms' => 'RoomController',
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
