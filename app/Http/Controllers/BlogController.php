<?php

namespace App\Http\Controllers;


use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show(Request $request, $blog_id) {
        //if($blog_id > Blog::all()->last()->id)
            //abort(404);
        $blog = Blog::findOrFail($blog_id);
        if($blog_id === '1')
            $lastblog = $blog;
        else
            $lastblog = Blog::where('id', '<', $blog_id)->get()->last();
        if($blog_id == Blog::all()->last()->id)
            $nextblog = $blog;
        else
            $nextblog = Blog::where('id', '>', $blog_id)->first();
        return view('blog.show', compact('blog', 'lastblog', 'nextblog'));
    }
    public function showlist(Request $request) {
        $blogs = Blog::paginate(10);
        $name = '博客列表';
        return view('blog.list', compact('blogs', 'name'));
    }
    public function store(Request $request) {
        $blog = new Blog;
        $blog->user_id = 1;
        $blog->tag_id = 0;
        //return $request->title;
        //return $request;
        //$blog->title = clean($request->title);
        $blog->title = $request->title;
        //return $blog;
        $blog->content_html = $request['content'];
        $blog->content = clean($request['content-html-code']);
        if(isset($request['intro']))
            $blog->intro = clean($request->intro);
        $blog->save();
        return $blog;
    }
    public function delete(Request $request, $blog_id) {
        $blog = Blog::find($blog_id);
        $blog->delete();
        return [];
    }
    public function restore(Request $request, $blog_id) {
        $blog = Blog::onlyTrashed()->find($blog_id);
        $blog->restore();
        return $blog;
    }
    public function change(Request $request, $blog_id) {
        $blog = Blog::find($blog_id);
        $blog->title = $request->title;
        $blog->content_html = $request['content'];
        $blog->content = clean($request['content-html-code']);
        if(isset($request['intro']))
            $blog->intro = clean($request->intro);
        $blog->save();
        return $blog;
    }
}
