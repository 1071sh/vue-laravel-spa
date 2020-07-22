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

Route::get('/{any}', function () { // 全てのHTTPメソッドに適用
    return view('welcome');
})->where('any', '.*');           // .*は正規表現で0文字以上の任意の文字列を意味する


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
