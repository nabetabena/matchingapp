<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




Route::resource('v1/home', 'HomeController');

Route::resource('v1/search', 'SearchController');

Route::resource('v1/profile', 'ProfileController');

Route::resource('v1//message', 'MessageController');

Route::resource('v1/threads', 'ThreadsController');

Route::resource('v1/mypage', 'MypageController');




