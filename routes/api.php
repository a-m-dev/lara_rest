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



// list articles 
Route::get('article', 'ArticleController@index');

// list single Article
Route::get('article/{id}', 'ArticleController@show');

// create new art6icle
Route::post('article', 'ArticleController@store');

// update 
Route::put('article', 'ArticleController@store');

// delete 
Route::delete('article', 'ArticleController@destroy');