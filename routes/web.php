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
    return view('index', ['title' => 'test', 'main_content' => 'first_test', 'blog_id' => '0']);
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('mydetail', function () {
    return view('mydetail');
});


Route::get('admin', function () {
    return view('admin.admin');
});

Route::any('addblog', function () {
    return view('blog.addblog');
});

Route::any('blog/bloglist', 'RouteController@showlist');

Route::get('login', function () {
    return view('login');
});
