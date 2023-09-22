<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seo = Seo::latest()->get();
        return view('back.seo.index', compact('seo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('back.seo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  =>    'required|unique:seos',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/seo/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }
        $seo                    =     new Seo;
        $seo->name              =     $request->name;
        $seo->image             =     $saveImage;
        $seo->metatitle         =     $request->metatitle;
        $seo->metakeyword       =     $request->metakeyword;
        $seo->metadescription   =     $request->metadescription;
        $seo->save();
        return redirect()->route('seo.index')->with('success', 'Successfully Added !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $seo = Seo::findOrFail($id);
        return view('back.seo.edit', compact('seo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $seo = Seo::findOrFail($id);
        $request->validate([
            'name'                  =>    'required|unique:seos,name,'.$id,
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/seo/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($seo->image))):
                File::delete(public_path($seo->image));
            endif;
        }else{
            $saveImage = $seo->image;
        }
        $seo->name              =     $request->name;
        $seo->image             =     $saveImage;
        $seo->metatitle         =     $request->metatitle;
        $seo->metakeyword       =     $request->metakeyword;
        $seo->metadescription   =     $request->metadescription;
        $seo->save();
        return redirect()->back()->with('success', 'Successfully Updated !');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $seo = Seo::findOrFail($id);
        if(File::exists(public_path($seo->image))):
            File::delete(public_path($seo->image));
        endif;
        Seo::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
}
