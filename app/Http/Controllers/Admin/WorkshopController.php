<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Workshop,Workshopmodules};
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
            $imagePath = '/upload/course/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        $workshop                    =     new Workshop;
        $workshop->name              =     $request->name;
        $workshop->slug              =     Str::slug($request->slug);
        $workshop->image             =     $saveImage;
        $workshop->alt               =     $request->alt;
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
            'about'           =>    'required',
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

        $workshop->name              =     $request->name;
        $workshop->slug              =     Str::slug($request->slug);
        $workshop->image             =     $saveImage;
        $workshop->alt               =     $request->alt;
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
        $course = Course::find($id);
        if(File::exists(public_path($course->image))){
            File::delete(public_path($course->image));
        }
        Course::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function faqs(Request $request)
    {
        $courseIds = Crypt::decrypt($request->courseId);
        $questions = $request->question;
        $answer = $request->answer;
        $coursefaqs = Coursefaq::where('course_id',$courseIds)->count();
        if($coursefaqs > 0):
            Coursefaq::where('course_id',$courseIds)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Coursefaq::create([
                    'course_id'   =>  $courseIds,
                    'question'  =>  $question,
                    'answer'    =>  $answer[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Faqs Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add faqs!');
        endif;
    }

    public function modules(Request $request)
    {
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
        $courseIds = Crypt::decrypt($request->courseId);
        $name = $request->name;
        $review = $request->review;
        $coursetestimonial = Coursetestimonial::where('course_id',$courseIds)->count();
        if($coursetestimonial > 0):
            Coursetestimonial::where('course_id',$courseIds)->delete();
        endif;
        if($name != null):
            foreach($name as $key => $name){
                Coursetestimonial::create([
                    'course_id' =>  $courseIds,
                    'name'      =>  $name,
                    'review'    =>  $review[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Course Testimonial Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Testimonial!');
        endif;
    }

    public function schedule(Request $request)
    {
        $courseIds = Crypt::decrypt($request->courseId);
        $time = $request->time;
        $task = $request->task;
        $courseschdule = Courseschdule::where('course_id',$courseIds)->count();
        if($courseschdule > 0):
            Courseschdule::where('course_id',$courseIds)->delete();
        endif;
        if($time != null):
            foreach($time as $key => $time){
                Courseschdule::create([
                    'course_id' =>  $courseIds,
                    'time'      =>  $time,
                    'task'      =>  $task[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Course Schedule Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Schedule!');
        endif;
    }

    public function dates(Request $request)
    {
        $courseIds = Crypt::decrypt($request->courseId);
        $date = $request->date;
        $seat = $request->seat;
        $coursedate = Coursedates::where('course_id',$courseIds)->count();
        if($coursedate > 0):
            Coursedates::where('course_id',$courseIds)->delete();
        endif;
        if($date != null):
            foreach($date as $key => $value){
                Coursedates::create([
                    'course_id' =>  $courseIds,
                    'date'      =>  $value,
                    'seats'      =>  $seat[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Course Date Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Coursedates!');
        endif;
    }


    public function inclusion(Request $request)
    {
        $courseIds = Crypt::decrypt($request->courseId);
        $inclusion = $request->inclusion;
        $courseinclusion = Courseinclusion::where('course_id',$courseIds)->count();
        if($courseinclusion > 0):
            Courseinclusion::where('course_id',$courseIds)->delete();
        endif;
        if($inclusion != null):
            foreach($inclusion as $key => $inclusion){
                Courseinclusion::create([
                    'course_id' =>  $courseIds,
                    'inclusion' =>  $inclusion,
                ]);
            }
            return redirect()->back()->with('success', 'Course Inclusion Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Inclusion!');
        endif;
    }

    public function media(Request $request)
    {
        // return $request;
        $courseIds = Crypt::decrypt($request->courseId);
        if($request->hasFile('media')){
            foreach ($request->file('media') as $imagefile) {
                $file = $imagefile->getClientOriginalName();
                $imageExt = $imagefile->getClientOriginalExtension();
                $imageName = pathinfo($file,PATHINFO_FILENAME);
                $image = Str::slug(uniqid().$imageName);
                $uploadImage = $image.'.'.$imageExt;
                $imagePath = '/upload/course/media/';
                $imagefile->move(public_path($imagePath), $uploadImage);
                $saveImage = $imagePath.$uploadImage;

                $cmedia = new Coursemedia;
                    $cmedia->course_id = $courseIds;
                    $cmedia->image = $saveImage;
                $cmedia->save();
            }
            return redirect()->back()->with('success', 'Course Media Successfully Added!');
        } else{
            return redirect()->back()->with('error', 'Error in media!');
        }
    }

    public function media_edit(string $id){
        $id = Crypt::decrypt($id);
        $media = Coursemedia::find($id);
        return view('back.course.editmedia',compact('media'));
    }
    public function media_update(Request $request){
        $coursemedia = Coursemedia::find($request->id);
        $coursemedia->alt = $request->alt;
        $coursemedia->save();
        $dd = Crypt::encrypt($coursemedia->course_id);
        return redirect("admin/course/{$dd}/edit")->with('success', 'Update Successfully');
    }
    public function media_delete(Request $request){
        $id = Crypt::decrypt($request->id);
        $coursemedia = Coursemedia::find($id);

        if(File::exists(public_path($coursemedia->image))){
            File::delete(public_path($coursemedia->image));
        }
        Coursemedia::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

}
