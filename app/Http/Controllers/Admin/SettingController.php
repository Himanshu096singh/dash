<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class SettingController extends Controller
{
    public function create()
    {
        $setting = Setting::first();
        return view('back.setting.create', compact('setting'));
    }

    public function setting(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required',
            'url'                   =>    'required',
            'email'                 =>    'required',
            'usmobile'              =>    'required',
            'logo'                  =>    'mimes:jpeg,png,jpg,webp|max:2048',
            'logoalt'               =>    'required',
            'fevicon'               =>    'mimes:jpeg,png,jpg,webp|max:2048',
            'disclaimer'            =>    'required',
            'robots'                =>    'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)->withInput();
        }
        // return $request;
        $settingexist = Setting::first();
        if($settingexist->id != null){
            $setting            =       Setting::findOrFail(1);
        }else{
            $setting            =       new Setting;
        }
        if($request->hasFile('logo')){
            $file = $request->file('logo')->getClientOriginalName();
            $imageExt = $request->file('logo')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/setting/';
            $request->logo->move(public_path($imagePath), $uploadImage);
            $savelogo = $imagePath.$uploadImage;
            if(File::exists(public_path($setting->logo))){
                File::delete(public_path($setting->logo));
            }
        }else{
            $savelogo = $setting->logo;
        }

        if($request->hasFile('fevicon')){
            $file = $request->file('fevicon')->getClientOriginalName();
            $imageExt = $request->file('fevicon')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/setting/';
            $request->fevicon->move(public_path($imagePath), $uploadImage);
            $savfevicon = $imagePath.$uploadImage;
            if(File::exists(public_path($setting->fevicon))){
                File::delete(public_path($setting->fevicon));
            }
        }else{
            $savfevicon = $setting->fevicon;
        }

        $setting->name              =       $request->name;
        $setting->url               =       $request->url;
        $setting->email             =       $request->email;
        $setting->usmobile          =       $request->usmobile;
        $setting->robots            =       $request->robots;
        $setting->logoalt           =       $request->logoalt;
        $setting->logo              =       $savelogo;
        $setting->fevicon           =       $savfevicon;
        $setting->disclaimer        =       $request->disclaimer;
        $setting->address           =       $request->address;
        $setting->save();
        return redirect()->back()->with('success','Successfully Updated !');
    }
}
