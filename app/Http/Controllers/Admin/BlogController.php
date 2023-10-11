<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Blog,Blogfaq};
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest()->get();
        return view('back.blog.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:blogs',
            'slug'                  =>    'required|unique:blogs',
            'status'                =>    'required',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
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
            $imagePath = '/upload/blog/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        $blog                    =     new Blog;
        $blog->name              =     $request->name;
        $blog->slug              =     Str::slug($request->slug);
        $blog->image             =     $saveImage;
        $blog->alt               =     $request->alt;
        $blog->status            =     $request->status;
        $blog->description       =     $request->description;
        $blog->tags              =     $request->tags;
        $blog->metatitle         =     $request->metatitle;
        $blog->metakeyword       =     $request->metakeyword;
        $blog->metadescription   =     $request->metadescription;
        $blog->save();
        return redirect()->route('blog.index')->with('success', 'Successfully Added');
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
        $blog = Blog::findOrFail($id);
        return view('back.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $blog = Blog::findOrFail($id);

        $validator= Validator::make($request->all() ,[
            'name'                  =>    'required|unique:blogs,name,'.$id,
            'slug'                  =>    'required|unique:blogs,slug,'.$id,
            'status'                =>    'required',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
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
            $imagePath = '/upload/blog/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($blog->image))){
                File::delete(public_path($blog->image));
            }
        }else{
            $saveImage = $blog->image;
        }
        
        $blog->name              =     $request->name;
        $blog->slug              =     Str::slug($request->slug);
        $blog->image             =     $saveImage;
        $blog->alt               =     $request->alt;
        $blog->status            =     $request->status;
        $blog->description       =     $request->description;
        $blog->tags              =     $request->tags;
        $blog->metatitle         =     $request->metatitle;
        $blog->metakeyword       =     $request->metakeyword;
        $blog->metadescription   =     $request->metadescription;
        $blog->save();
        return redirect()->back()->with('success', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $blog = Blog::find($id);
        if(File::exists(public_path($blog->image))){
            File::delete(public_path($blog->image));
        }
        Blog::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function faqs(Request $request)
    {
        $blogIds = Crypt::decrypt($request->blogId);
        $questions = $request->question;
        $answer = $request->answer;
        $blogfaqs = Blogfaq::where('blog_id',$blogIds)->count();
        if($blogfaqs > 0):
            Blogfaq::where('blog_id',$blogIds)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Blogfaq::create([
                    'blog_id'   =>  $blogIds,
                    'question'  =>  $question,
                    'answer'    =>  $answer[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Faqs Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add faqs!');
        endif;
    }
}
