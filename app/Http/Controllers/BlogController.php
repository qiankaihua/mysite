<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Request $request, $blog_id) {
        $blog = Blog::find($blog_id);
        return $blog_id;
    }
    public function showlist(Request $request) {
        $blogs = Blog::where('id', '>', '0')->all();
        return $blogs;
    }
    public function store(Request $request) {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return $blog;
    }
    public function delete(Request $request, $blog_id) {
        $blog = Blog::find($blog_id);
        $blog->deletes();
        return $blog;
    }
}
