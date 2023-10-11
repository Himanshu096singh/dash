<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::get();
        return view('back.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image'     =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'       =>    'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/founder/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        $gallery                    =     new Gallery;
        $gallery->caption           =     $request->caption;
        $gallery->image             =     $saveImage;
        $gallery->alt               =     $request->alt;
        $gallery->save();
        return redirect()->route('gallery.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $testi = Gallery::find($id);
        if(File::exists(public_path($testi->image))){
            File::delete(public_path($testi->image));
        }
        Gallery::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
