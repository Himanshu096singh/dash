<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CkeditorController extends Controller
{
    public function uploadimage(Request $request)
    {
       if($request->hasFile('upload')){
            $image = $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($image, PATHINFO_FILENAME);
            $imageExt = $request->file('upload')->getClientOriginalExtension();
            $imageName = uniqId().$filename;
            $strSlugName = Str::slug($imageName);
            $saveImage = $strSlugName.'.'.$imageExt;
            $imagePath = '/upload/ckeditor/';
            $request->upload->move(public_path($imagePath), $saveImage);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset($imagePath.$saveImage); 
            $msg = 'Image successfully uploaded'; 
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg','$saveImage')</script>";
              
            // Render HTML output 
            @header('Content-type: text/html; charset=utf-8'); 
            echo $re;
            
       } 
    }
}