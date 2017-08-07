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

//主页
Route::get('/', 'RouteController@showindex');

//我的信息
Route::get('mydetail', function () {
    return view('mydetail');
});

//管理页面
Route::get('admin', function () {
    return view('admin.admin');
});

//添加blog
Route::any('addblog', function () {
    return view('blog.addblog');
});

//获取blog列表
Route::any('blog/bloglist', 'BlogController@showlist');

//获取blog详情
Route::get('blog/{id}','BlogController@show');

//登录
Route::get('login', function () {
    return view('login');
});
