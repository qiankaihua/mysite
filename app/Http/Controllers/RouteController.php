<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function showadmin() {
        //$blogs = Blog::where('id', '>', '0')->all();
        //return view('admin', $blogs);
        return view('admin');
    }
    public function showindex() {
        $blogs = Blog::all()->take(5);
        $newblog = Blog::all()->last();
        return view('index', compact('newblog', 'blogs'));
    }
    /*
    public function showlist() {
        $title = 'titl<a href="https://www.baidu.com/">e1</a>';
        $intro = 'in<sup>tro</sup>';
        return view('blog.list', [
            'title' => $title,
            'intro' => $intro,
        ]);
    }
    */

}
