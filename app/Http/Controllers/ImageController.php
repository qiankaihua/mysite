<?php

namespace App\Http\Controllers;

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
    public function store(Request $request) {
        return [];
    }
}
