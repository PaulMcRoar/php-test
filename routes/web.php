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

Route::group(
[
    'prefix' => 'character',
], function () {

    Route::get('/', 'CharacterController@index')
         ->name('character.index');

    Route::get('/show/{character}','CharacterController@show')
         ->name('character.show')
         ->where('id', '[0-9]+');

});
Route::group(
[
    'prefix' => 'location',
], function () {

    Route::get('/', 'LocationController@index')
         ->name('location.index');

    Route::get('/show/{location}','LocationController@show')
         ->name('location.show')
         ->where('id', '[0-9]+');

});
Route::group(
[
    'prefix' => 'episode',
], function () {

    Route::get('/', 'EpisodeController@index')
         ->name('episode.index');

    Route::get('/show/{episode}','EpisodeController@show')
         ->name('episode.show')
         ->where('id', '[0-9]+');

});