<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Img;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function showindex() {
        $blogs = Blog::all()->reverse()->take(5);
        $newblog = Blog::all()->last();
        if($newblog == null) {
            $newblog = new Blog;
            $newblog->title = '暂时不存在Blog';
            $newblog->content = '';
        }
        $imgs = Img::all()->reverse()->take(8);
        $img_title = null;
        if(count($imgs) == 0) {
            $img_title = '暂时不存在照片';
        }
        return view('index', compact('newblog', 'blogs', 'imgs', 'img_title'));
    }



    public function showadmin() {
        return view('admin.admin');
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



    public function showadminimagelist(Request $request) {
        $imgs = Img::withTrashed()->paginate(15);
        return view('admin.image.imagelist', compact('imgs'));
    }

}
