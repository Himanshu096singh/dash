<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Founder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $founder = Founder::get();
        return view('back.founder.index',compact('founder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('back.founder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      =>    'required',
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

        $founder                    =     new Founder;
        $founder->name              =     $request->name;
        $founder->position          =     $request->position;
        $founder->image             =     $saveImage;
        $founder->alt               =     $request->alt;
        $founder->facebook          =     $request->facebook;
        $founder->twitter           =     $request->twitter;
        $founder->instagram         =     $request->instagram;
        $founder->gmail             =     $request->gmail;
        $founder->save();
        return redirect()->route('founders.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Founder $founder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $founder = Founder::findOrFail($id);
        return view('back.founder.edit', compact('founder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        // return $request->all();
        $id = Crypt::decrypt($eid);
        $founder = Founder::findOrFail($id);

        $validator= Validator::make($request->all() ,[
            'name'         =>    'required',
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
            if(File::exists(public_path($founder->image))){
                File::delete(public_path($founder->image));
            }
        }else{
            $saveImage = $founder->image;
        }
        
        $founder->name              =     $request->name;
        $founder->position          =     $request->position;
        $founder->image             =     $saveImage;
        $founder->alt               =     $request->alt;
        $founder->facebook          =     $request->facebook;
        $founder->twitter           =     $request->twitter;
        $founder->instagram         =     $request->instagram;
        $founder->gmail             =     $request->gmail;
        $founder->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $testi = Founder::find($id);
        if(File::exists(public_path($testi->image))){
            File::delete(public_path($testi->image));
        }
        Founder::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
