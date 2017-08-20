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
    /**
    * 图片上传保存
    *
    * 参数
    *
    * @param Illuminate\Http\Request $request
    */
    public function store(Request $request) {
        $path = $request->file('file')->store('public/imgs');
        
        $img = new Img;
        $img->user_id = 1;
        $img->album_id = 0;
        $img->url = $path;
        //$img->intrp = clean($request->intro);
        $img->intro = $request->intro;
        $img->url = str_replace("public/", "", $img->url);
        $img->url = '/storage/'.$img->url;
        $img->save();
        return $img;
    }
    public function restore(Request $request, $img_id) {
        $img = Img::onlyTrashed()->find($img_id);
        $img->restore();
        return $img;
    }
    public function delete(Request $request, $img_id) {
        $img = Img::find($img_id);
        $img->delete();
        return [];
    }
    public function change(Request $request, $img_id) {
        $img = Img::find($img_id);
        if(isset($request['intro']) && $request->intro != '') {
            $img->intro = $request->intro;
        }
        $img->save();
        return $img;
    }
}
