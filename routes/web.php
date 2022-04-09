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
    return view('newsList');
});

Route::match(array('GET', 'POST'), '/create/', 'App\Http\Controllers\NewsController@create')->name("CreateNews");
Route::match(array('GET', 'POST'), '/delete/', 'App\Http\Controllers\NewsController@delete')->name("DeleteNews");
Route::match(array('GET', 'POST'), '/news/', 'App\Http\Controllers\NewsController@newsRender')->name("ShowNews");