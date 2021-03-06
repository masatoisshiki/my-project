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
    return view('layouts.app');
});

// ユーザー登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
//ログイン/ログアウト認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
// ユーザー認証付きルーティング
Route::group(['middleware' => ['auth']], function () {
    Route::resource('layouts', 'UsersController', ['only' => ['index', 'show', 'edit', 'update', 'destroy']]);
});
// 新規投稿ページ
Route::get('/post', 'PostsController@post')->name('post');

// 新規投稿確認ページ
Route::post('/confirm', 'PostsController@confirm')->name('confirm');

// 新規投稿完了ページ
Route::post('/complete', 'PostsController@complete')->name('complete');