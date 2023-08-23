<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            if (!File::exists(public_path() . '/upload/project/gallery/' . date('d-m-Y')))
            {
                File::makeDirectory(public_path() . '/upload/project/gallery/' . date('d-m-Y'), $mode = 0777, true, true);
            }
            $file->move(public_path() . '/upload/project/gallery/' . date('d-m-Y'), $file->getClientOriginalName());
            $image = '/upload/project/gallery/' . date('d-m-Y') . '/' . $file->getClientOriginalName();

            return response()->json($image, 200);
        }
        return abort(400, "Bad request");
    }

    public function delete(Request $request)
    {
        if ($request->file_path) {
            if (File::exists(public_path() . $request->file_path)) {
                File::delete(public_path() . $request->file_path);
                return response()->json(true, 200);
            }
            return response()->json("File not found", 200);
        }
        return abort(400, "File path not found");
    }
}
