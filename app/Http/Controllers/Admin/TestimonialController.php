<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $testimonial = Testimonial::all();
       return view('back.testimonial.index',compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      =>    'required',
            'status'    =>    'required',
            'image'     =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'review'    =>    'required',
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
            $imagePath = '/upload/testimonial/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        $testimonial                    =     new Testimonial;
        $testimonial->name              =     $request->name;
        $testimonial->image             =     $saveImage;
        $testimonial->status            =     $request->status;
        $testimonial->review            =     $request->review;
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $testimonial = Testimonial::findOrFail($id);
        return view('back.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        // return $request->all();
        $id = Crypt::decrypt($eid);
        $testimonial = Testimonial::findOrFail($id);

        $validator= Validator::make($request->all() ,[
            'name'         =>    'required',
            'status'       =>    'required',
            'review'       =>    'required',
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
            $imagePath = '/upload/testimonial/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($testimonial->image))){
                File::delete(public_path($testimonial->image));
            }
        }else{
            $saveImage = $testimonial->image;
        }
        
        $testimonial->name         =     $request->name;
        $testimonial->image        =     $saveImage;
        $testimonial->status       =     $request->status;
        $testimonial->review       =     $request->review;
        $testimonial->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $testi = Testimonial::find($id);
        if(File::exists(public_path($testi->image))){
            File::delete(public_path($testi->image));
        }
        Testimonial::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
