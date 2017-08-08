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


//blog

//Route::get('/bloglist', '');

Route::post('/blog/add', 'BlogController@store');

Route::delete('/blog/{blog_id}', 'BlogController@delete');

Route::post('/blog/{blog_id}', 'BlogController@restore');

Route::put('/blog/{blog_id}', 'BlogController@change');

/*
Route::get('/blog/{blog_id}', '');

Route::delete('/blog/{blog_id}', '');

Route::put('/blog/{blog_id}', '');
*/