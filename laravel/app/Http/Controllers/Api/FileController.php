<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function uploadFile(Request $request) {
        $path = $request->file('image')->store('image');


        return response()->json(["path"=>$path]);
    }

    public function getFile(Request $request) {
        return response()->json(["image_url" => Storage::download($request->path)]);
    }
}
