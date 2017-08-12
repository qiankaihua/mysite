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

Route::post('/blog/add', 'BlogController@store');

Route::delete('/blog/{blog_id}', 'BlogController@delete');

Route::post('/blog/{blog_id}', 'BlogController@restore');

Route::put('/blog/{blog_id}', 'BlogController@change');

Route::post('/uploadimage', 'ImageController@uploadimage');

//img

Route::post('/image/add', 'ImageController@store');

Route::delete('/image/{img_id}', 'ImageController@delete');

Route::put('/image/{img_id}', 'ImageController@change');