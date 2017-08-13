<?php

namespace App\Http\Controllers;

use App\Img;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadimage(Request $request) {
        $path = base_path('storage/app/');
        if(isset($request['editormd-image-file'])) {
            $pic = $request->file('editormd-image-file')->store('imgs');
            $url = asset($path.'/'.$pic);
        }
        else {
            $message = 'Not File';
        }
        $data = array(
            'success' => empty($message) ? 0 : 1,
            'message' => $message,
            'url' => !empty($url) ? url : '',
        );
        header('Content-Type:application/json;charset=utf8');
        exit(json_encoed($data));
    }
    //
    //
    //
    //
    public function showlist(Request $request) {
        $name = '图片列表';
        $imgs = Img::paginate(15);
        return view('image.list', compact('name', 'imgs'));
    }

    public function store(Request $request) {
        $path = $request->file('file')->store('public/imgs');
        
        $img = new Img;
        $img->user_id = 1;
        $img->album_id = 0;
        $img->url = $path;
        //$img->intrp = clean($request->intro);
        $img->intro = $request->intro;
        $img->url = str_replace("public/", "", $img->url);
        $img->url = 'storage/'.$img->url;
        $img->save();
        return $img;
    }
}
