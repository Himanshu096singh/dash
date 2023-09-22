<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customcode;
use Illuminate\Support\Facades\Validator;

class CustomcodeController extends Controller
{
    public function create()
    {
        $code = Customcode::first();
        return view('back.code.customcode', compact('code'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'css'           =>    'required',
            'js'            =>    'required',
        ]);
        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)->withInput();
        }

        $customcodeexist = Customcode::first();
        if($customcodeexist->id != null){
            $custom            =       Customcode::findOrFail(1);
        }else{
            $custom            =       new Customcode;
        }

        $custom->css              =       $request->css;
        $custom->js               =       $request->js;
        $custom->save();
        return redirect()->back()->with('success','Successfully Updated !');
    }
}
