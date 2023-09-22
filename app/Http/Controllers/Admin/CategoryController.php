<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Category,Categoryfaq};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->get();
        return view('back.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                  =>    'required|unique:categories',
            'slug'                  =>    'required|unique:categories',
            'status'                =>    'required',
            'color'                 =>    'required',
            'image'                 =>    'nullable',
            'alt'                   =>    'nullable',
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
            $imagePath = '/upload/category/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }else{
            $saveImage = null;
        }
        $category                    =     new Category;
        $category->name              =     $request->name;
        $category->slug              =     Str::slug($request->slug);
        $category->image             =     $saveImage;
        $category->alt               =     $request->alt;
        $category->status            =     $request->status;
        $category->color             =     $request->color;
        $category->title             =     $request->title;
        $category->description       =     $request->description;
        $category->metatitle         =     $request->metatitle;
        $category->metakeyword       =     $request->metakeyword;
        $category->metadescription   =     $request->metadescription;
        $category->save();
        return redirect()->route('category.index')->with('success', 'Successfully Added');

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
        $category = Category::find($id);
        return view('back.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:categories,name,'.$id,
            'slug'                  =>    'required|unique:categories,slug,'.$id,
            'alt'                   =>    'nullable',
            'status'                =>    'required',
            'color'                 =>    'required',
            'title'                 =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $category = Category::find($id);
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/category/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($category->image))){
                File::delete(public_path($category->image));
            }
        }else{
            $saveImage = $category->image;
        }

        $category->name              =     $request->name;
        $category->slug              =     Str::slug($request->slug);
        $category->image             =     $saveImage;
        $category->alt               =     $request->alt;
        $category->status            =     $request->status;
        $category->color             =     $request->color;
        $category->title             =     $request->title;
        $category->description       =     $request->description;
        $category->metatitle         =     $request->metatitle;
        $category->metakeyword       =     $request->metakeyword;
        $category->metadescription   =     $request->metadescription;
        $category->save();
        return redirect()->back()->with('success', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $category = Category::find($id);
        if(File::exists(public_path($category->image))){
            File::delete(public_path($category->image));
        }
        Category::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
    
    public function savefaq(Request $request)
    {
        
        $catId      = Crypt::decrypt($request->category_id);
        $questions  = $request->question;
        $answer     = $request->answer;
        $faqsExist  = Categoryfaq::where('category_id', $catId)->count();
        if($faqsExist > 0):
            Categoryfaq::where('category_id', $catId)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Categoryfaq::create([
                    'category_id'   => $catId,
                    'question'      => $question,
                    'answer'        => $answer[$key]
                    ]);
            }
            return redirect()->back()->with('success', 'Faqs Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Something went wrong !');
        endif;
    }
    
    public function formstatus(Request $request)
    {
        $id = $request->catId;
        $category = Category::find($id);
        if($category->formstatus == 0):
            $formstatus      =       1;
        else:
            $formstatus      =       0;
        endif;
        $category->formstatus       =       $formstatus;
        $category->save();
        return true;
    }
}
