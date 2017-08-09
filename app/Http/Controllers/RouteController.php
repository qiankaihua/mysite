<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function showadmin() {
        return view('admin.admin');
    }
    public function showindex() {
        $blogs = Blog::all()->reverse()->take(5);
        $newblog = Blog::all()->last();
        if($newblog == null) {
            $newblog = new Blog;
            $newblog->title = '暂时不存在Blog';
            $newblog->content = '';
        }
        return view('index', compact('newblog', 'blogs'));
    }
    public function showadminbloglist() {
        $blogs = Blog::withTrashed()->paginate(10);
        return view('admin.blog.bloglist', compact('blogs'));
    }
    public function showadminblog(Request $request, $blog_id) {
        $blog = Blog::withTrashed()->find($blog_id);
        return view('admin.blog.blog', compact('blog'));
    }
    public function changeblog(Request $request, $blog_id) {
        $blog = Blog::withTrashed()->find($blog_id);
        return view('admin.blog.update', compact('blog'));
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
