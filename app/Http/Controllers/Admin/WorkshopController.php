<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Workshop,Workshopmodules,Workshoptestimonials,Workshopexcept,Workshopresource};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshop = Workshop::latest()->get();
        return view('back.workshop.index', compact('workshop'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:courses',
            'slug'                  =>    'required|unique:courses',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'                   =>    'required',
            'image2'                 =>   'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt2'                   =>   'required',
            'image3'                 =>   'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt3'                   =>   'required',
            'image4'                 =>   'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt4'                   =>   'required',
            'image5'                 =>   'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt5'                   =>   'required',
            'about'                 =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
            'duration'              =>    'required',
            'session'               =>    'required',
            'onlineprice'           =>    'required',
            'inpersonprice'         =>    'required',
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
            $imagePath = '/upload/workshop/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        if($request->hasFile('image2')){
            $file = $request->file('image2')->getClientOriginalName();
            $imageExt = $request->file('image2')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image2->move(public_path($imagePath), $uploadImage);
            $saveImage2 = $imagePath.$uploadImage;
        }

        if($request->hasFile('image3')){
            $file = $request->file('image3')->getClientOriginalName();
            $imageExt = $request->file('image3')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image3->move(public_path($imagePath), $uploadImage);
            $saveImage3 = $imagePath.$uploadImage;
        }

        if($request->hasFile('image4')){
            $file = $request->file('image4')->getClientOriginalName();
            $imageExt = $request->file('image4')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image4->move(public_path($imagePath), $uploadImage);
            $saveImage4 = $imagePath.$uploadImage;
        }

        if($request->hasFile('image5')){
            $file = $request->file('image5')->getClientOriginalName();
            $imageExt = $request->file('image5')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image5->move(public_path($imagePath), $uploadImage);
            $saveImage5 = $imagePath.$uploadImage;
        }

        $workshop                    =     new Workshop;
        $workshop->name              =     $request->name;
        $workshop->slug              =     Str::slug($request->slug);
        $workshop->image             =     $saveImage;
        $workshop->alt               =     $request->alt;
        $workshop->image2             =     $saveImage2;
        $workshop->alt2               =     $request->alt2;
        $workshop->image3             =     $saveImage3;
        $workshop->alt3               =     $request->alt3;
        $workshop->image4             =     $saveImage4;
        $workshop->alt4               =     $request->alt4;
        $workshop->image5             =     $saveImage5;
        $workshop->alt5               =     $request->alt5;
        $workshop->about             =     $request->about;
        $workshop->metatitle         =     $request->metatitle;
        $workshop->metakeywords      =     $request->metakeyword;
        $workshop->metadescription   =     $request->metadescription;
        $workshop->duration          =     $request->duration;
        $workshop->session           =     $request->session;
        $workshop->onlineprice       =     $request->onlineprice;
        $workshop->inpersonprice     =     $request->inpersonprice;
        $workshop->save();
        return redirect()->route('workshop.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $workshop = Workshop::findOrFail($id);
        return view('back.workshop.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {   $id = Crypt::decrypt($eid);
        $workshop = Workshop::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:workshops,name,'.$id,
            'slug'                  =>    'required|unique:workshops,slug,'.$id,
            'alt'                   =>    'required',
            'alt2'                  =>    'required',
            'alt3'                  =>    'required',
            'alt4'                  =>    'required',
            'alt5'                  =>    'required',
            'about'                 =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
            'duration'              =>    'required',
            'session'               =>    'required',
            'onlineprice'           =>    'required',
            'inpersonprice'         =>    'required',
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
            $imagePath = '/upload/workshop/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        } else {
            $saveImage = $workshop->image;
        }

        if($request->hasFile('image2')){
            $file = $request->file('image2')->getClientOriginalName();
            $imageExt = $request->file('image2')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image2->move(public_path($imagePath), $uploadImage);
            $saveImage2 = $imagePath.$uploadImage;
        } else {
            $saveImage2 = $workshop->image2;
        }

        if($request->hasFile('image3')){
            $file = $request->file('image3')->getClientOriginalName();
            $imageExt = $request->file('image3')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image3->move(public_path($imagePath), $uploadImage);
            $saveImage3 = $imagePath.$uploadImage;
        } else {
            $saveImage3 = $workshop->image3;
        }

        if($request->hasFile('image4')){
            $file = $request->file('image4')->getClientOriginalName();
            $imageExt = $request->file('image4')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image4->move(public_path($imagePath), $uploadImage);
            $saveImage4 = $imagePath.$uploadImage;
        } else {
            $saveImage4 = $workshop->image4;
        }

        if($request->hasFile('image5')){
            $file = $request->file('image5')->getClientOriginalName();
            $imageExt = $request->file('image5')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/workshop/';
            $request->image5->move(public_path($imagePath), $uploadImage);
            $saveImage5 = $imagePath.$uploadImage;
        } else {
            $saveImage5 = $workshop->image5;
        }

        $workshop->name              =     $request->name;
        $workshop->slug              =     Str::slug($request->slug);
        $workshop->image             =     $saveImage;
        $workshop->alt               =     $request->alt;
        $workshop->image2             =     $saveImage2;
        $workshop->alt2               =     $request->alt2;
        $workshop->image3             =     $saveImage3;
        $workshop->alt3               =     $request->alt3;
        $workshop->image4             =     $saveImage4;
        $workshop->alt4               =     $request->alt4;
        $workshop->image5             =     $saveImage5;
        $workshop->alt5               =     $request->alt5;
        $workshop->about             =     $request->about;
        $workshop->metatitle         =     $request->metatitle;
        $workshop->metakeywords      =     $request->metakeyword;
        $workshop->metadescription   =     $request->metadescription;
        $workshop->duration        =     $request->duration;
        $workshop->session         =     $request->session;
        $workshop->onlineprice     =     $request->onlineprice;
        $workshop->inpersonprice   =     $request->inpersonprice;
        $workshop->save();
        return redirect()->back()->with('success', 'Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $workshop = Workshop::find($id);
        if(File::exists(public_path($workshop->image))){
            File::delete(public_path($workshop->image));
        }
        Workshop::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function modules(Request $request)
    {
        // return $request->all();
        $workshopId = Crypt::decrypt($request->workshopid);
        $questions = $request->heading;
        $answer = $request->comment;
        $workshopmodules = Workshopmodules::where('workshop_id',$workshopId)->count();
        if($workshopmodules > 0):
            Workshopmodules::where('workshop_id',$workshopId)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Workshopmodules::create([
                    'workshop_id'   =>  $workshopId,
                    'question'    =>  $question,
                    'answer'      =>  $answer[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Workshop Modules Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Modules Details!');
        endif;
    }

    public function testimonial(Request $request)
    {
        $workshopid = Crypt::decrypt($request->workshopid);
        $name = $request->name;
        $review = $request->review;
        $workshoptestimonials = Workshoptestimonials::where('workshop_id',$workshopid)->count();
        if($workshoptestimonials > 0):
            Workshoptestimonials::where('workshop_id',$workshopid)->delete();
        endif;
        if($name != null):
            foreach($name as $key => $name){
                Workshoptestimonials::create([
                    'workshop_id' =>  $workshopid,
                    'name'      =>  $name,
                    'review'    =>  $review[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Workshop Testimonial Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Testimonial!');
        endif;
    }

    public function except(Request $request)
    {
        $workshopid = Crypt::decrypt($request->workshopid);
        $except = $request->except;
        $workshopexcept = Workshopexcept::where('workshop_id',$workshopid)->count();
        if($workshopexcept > 0):
            Workshopexcept::where('workshop_id',$workshopid)->delete();
        endif;
        if($except != null):
            foreach($except as $key => $value){
                Workshopexcept::create([
                    'workshop_id' =>  $workshopid,
                    'except'    =>  $value,
                ]);
            }
            return redirect()->back()->with('success', 'Except Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Inclusion!');
        endif;
    }

    public function resource(Request $request)
    {
        $workshopid = Crypt::decrypt($request->workshopid);
        $resources = $request->resource;
        $workshopres = Workshopresource::where('workshop_id',$workshopid)->count();
        if($workshopres > 0):
            Workshopresource::where('workshop_id',$workshopid)->delete();
        endif;
        if($resources != null):
            foreach($resources as $key => $value){
                Workshopresource::create([
                    'workshop_id' =>  $workshopid,
                    'resources'    =>  $value,
                ]);
            }
            return redirect()->back()->with('success', 'Resources Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Resources!');
        endif;
    }


}
