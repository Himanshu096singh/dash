<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $media = Media::latest()->get();
        return view('back.media.index', compact('media')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'image'      => 'required|max:2048'
            ]);
        if($request->hasFile('image')){
            $images = $request->file('image');
            foreach($images as $key => $image){
                if($image->isValid()) {
                    $file = $image->getClientOriginalName();
                    $imageExt = $image->getClientOriginalExtension();
                    $imageName = pathinfo($file,PATHINFO_FILENAME);
                    $imageSlug = Str::slug(uniqid().$imageName);
                    $uploadImage = $imageSlug.'.'.$imageExt;
                    $imagePath = '/upload/medai/';
                    $image->move(public_path($imagePath), $uploadImage);
                    $saveImage = $imagePath.$uploadImage;
                }
                $media          =       new Media;
                $media->name    =       $request->name;
                $media->image    =      $saveImage;
                $media->save();
            }
            return redirect()->back()->with('success', 'Successfully Added !');
        }
        
        
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $media = Media::findOrFail($id);
        if(File::exists(public_path($media->image))):
            File::delete(public_path($media->image));
        endif;
        Media::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
    
    public function deletemultiple(Request $request)
    {
        if($request->id != null){
            $ids = $request->id;
            foreach($ids as $key => $id){
                $media = Media::findOrFail($id);
                if(File::exists(public_path($media->image))){
                    File::delete(public_path($media->image));  
                }
                $media->delete();
            }
            return 1;
        }else{
            return response()->json('Plesae select atlease one record');
        }
    }
}