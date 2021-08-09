<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['middleware' => 'auth:api'], function() {
    // Route::get('/users', [
    //     'uses'=>'App\Http\Controllers\CovidController@getDetails'
    // ]);
});


Route::get('/covid_api', [
    'uses'=>'App\Http\Controllers\CovidController@getDetailsAPI'
]);

Route::get('/covid_details', [
    'uses'=>'App\Http\Controllers\CovidController@getDetails'
]);

Route::get('/guides', [
    'uses'=>'App\Http\Controllers\GuideController@getGuides'
]);

Route::post('/login', [
    'uses'=>'App\Http\Controllers\AuthController@login' //not use for now
]);

Route::post('/save_guide', [
    'uses'=>'App\Http\Controllers\GuideController@saveGuide'
]);

Route::get('/users', [
    'uses'=>'App\Http\Controllers\UserController@getUsers'
]);

Route::post('/save_user', [
    'uses'=>'App\Http\Controllers\UserController@saveUser'
]);
