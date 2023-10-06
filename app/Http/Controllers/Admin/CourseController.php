<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\{Course,Coursefaq,Coursecurriculam,Coursetestimonial,CourseInclusion,Courseschdule};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::latest()->get();
        return view('back.course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:courses',
            'slug'                  =>    'required|unique:courses',
            'status'                =>    'required',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
            'privateroom'           =>    'required',
            'shared2room'           =>    'required',
            'shared3room'           =>    'required',
            'shared6room'           =>    'required',
            'duration'              =>    'required',
            'certificate'           =>    'required',
            'hour'                  =>    'required',
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

        $course                    =     new Course;
        $course->name              =     $request->name;
        $course->slug              =     Str::slug($request->slug);
        $course->image             =     $saveImage;
        $course->alt               =     $request->alt;
        $course->status            =     $request->status;
        $course->description       =     $request->description;
        $course->metatitle         =     $request->metatitle;
        $course->metakeywords      =     $request->metakeyword;
        $course->metadescription   =     $request->metadescription;
        $course->privateroom       =     $request->privateroom;
        $course->shared2room       =     $request->shared2room;
        $course->shared3room       =     $request->shared3room;
        $course->shared6room       =     $request->shared6room;
        $course->duration          =     $request->duration;
        $course->certification     =     $request->certificate;
        $course->hour              =     $request->hour;
        $course->save();
        return redirect()->route('course.index')->with('success', 'Successfully Added');
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
        $course = Course::findOrFail($id);
        return view('back.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {   $id = Crypt::decrypt($eid);
        $course = Course::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:courses,name,'.$id,
            'slug'                  =>    'required|unique:courses,slug,'.$id,
            'status'                =>    'required',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
            'privateroom'           =>    'required',
            'shared2room'           =>    'required',
            'shared3room'           =>    'required',
            'shared6room'           =>    'required',
            'duration'              =>    'required',
            'certificate'           =>    'required',
            'hour'                  =>    'required',
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
        } else {
            $saveImage = $course->image;
        }

        $course->name              =     $request->name;
        $course->slug              =     Str::slug($request->slug);
        $course->image             =     $saveImage;
        $course->alt               =     $request->alt;
        $course->status            =     $request->status;
        $course->description       =     $request->description;
        $course->metatitle         =     $request->metatitle;
        $course->metakeywords      =     $request->metakeyword;
        $course->metadescription   =     $request->metadescription;
        $course->privateroom       =     $request->privateroom;
        $course->shared2room       =     $request->shared2room;
        $course->shared3room       =     $request->shared3room;
        $course->shared6room       =     $request->shared6room;
        $course->duration          =     $request->duration;
        $course->certification     =     $request->certificate;
        $course->hour              =     $request->hour;
        $course->save();
        return redirect()->route('course.index')->with('success', 'Successfully Added');
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

    public function curriculams(Request $request)
    {
        $courseIds = Crypt::decrypt($request->courseId);
        $questions = $request->heading;
        $answer = $request->comment;
        $Coursecurriculam = Coursecurriculam::where('course_id',$courseIds)->count();
        if($Coursecurriculam > 0):
            Coursecurriculam::where('course_id',$courseIds)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Coursecurriculam::create([
                    'course_id'   =>  $courseIds,
                    'question'  =>  $question,
                    'answer'    =>  $answer[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Course Curriculam Successfully Added !');
        else:
            return redirect()->back()->with('error', 'Please add Curriculam Details!');
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
}
