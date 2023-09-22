<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category,Subcategory,Subcategoryfaq};
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategory = Subcategory::latest()->get();
        return view('back.subcategory.index', compact('subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('back.subcategory.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:subcategories',
            'slug'                  =>    'required|unique:subcategories',
            'category'              =>    'required',
            'status'                =>    'required',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'                   =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/subcategory/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }
        $subcategory                    =     new Subcategory;
        $subcategory->category_id       =     $request->category;
        $subcategory->name              =     $request->name;
        $subcategory->slug              =     Str::slug($request->slug);
        $subcategory->image             =     $saveImage;
        $subcategory->alt               =     $request->alt;
        $subcategory->status            =     $request->status;
        $subcategory->description       =     $request->description;
        $subcategory->metatitle         =     $request->metatitle;
        $subcategory->metakeyword       =     $request->metakeyword;
        $subcategory->metadescription   =     $request->metadescription;
        $subcategory->save();
        return redirect()->route('subcategory.index')->with('success', 'Successfully Added');
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
        $category = Category::all();
        $subcategory = Subcategory::findOrFail($id);
        return view('back.subcategory.edit', compact('subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:subcategories,name,'.$id,
            'slug'                  =>    'required|unique:subcategories,slug,'.$id,
            'alt'                   =>    'required',
            'status'                =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $subcategory = Subcategory::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/subcategory/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($subcategory->image))){
                File::delete(public_path($subcategory->image));
            }
        }else{
            $saveImage = $subcategory->image;
        }

        $subcategory->category_id       =     $request->category;
        $subcategory->name              =     $request->name;
        $subcategory->slug              =     Str::slug($request->slug);
        $subcategory->image             =     $saveImage;
        $subcategory->alt               =     $request->alt;
        $subcategory->status            =     $request->status;
        $subcategory->description       =     $request->description;
        $subcategory->metatitle         =     $request->metatitle;
        $subcategory->metakeyword       =     $request->metakeyword;
        $subcategory->metadescription   =     $request->metadescription;
        $subcategory->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $category = Subcategory::find($id);
        if(File::exists(public_path($category->image))){
            File::delete(public_path($category->image));
        }
        Subcategory::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
    
    public function savefaq(Request $request)
    {
        $subCatId = Crypt::decrypt($request->subcategory_id);
        $questions  = $request->question;
        $answer     = $request->answer;
        $faqsExist  = Subcategoryfaq::where('subcategory_id', $subCatId)->count();
        if($faqsExist > 0):
            Subcategoryfaq::where('subcategory_id', $subCatId)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Subcategoryfaq::create([
                    'subcategory_id'   => $subCatId,
                    'question'      => $question,
                    'answer'        => $answer[$key]
                    ]);
            }
            return redirect()->back()->with('success', 'Faqs Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Something went wrong !');
        endif;
    }
}
