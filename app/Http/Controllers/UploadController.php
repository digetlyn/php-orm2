<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //업로드처리하는 폼!
    public function uploadForm()
    {
        return view('upload');
    }



    public function uploadFile(Request $request)
    {
        $request->file->store('public');  // storeage/app/public 폴러로 파일이 저장처리 되는..
        return "파일이 성공적으로 저장되었습니다.";
    }
}
