<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Code;
use Illuminate\Support\Facades\Validator;

class CodeController extends Controller
{
    public function create()
    {
        $code = Code::first();
        return view('back.code.create', compact('code'));
    }

    public function store(Request $request)
    {
        $codeexist = Code::first();
        if($codeexist->id != null){
            $setting            =       Code::findOrFail(1);
        }else{
            $setting            =       new Code;
        }

        $setting->header              =       $request->header;
        $setting->footer              =       $request->footer;
        $setting->save();
        return redirect()->back()->with('success','Successfully Updated !');
    }
    
    public function customcssjs()
    {
        $code = Code::first();
        return view('back.code.create', compact('code'));
    }
}
