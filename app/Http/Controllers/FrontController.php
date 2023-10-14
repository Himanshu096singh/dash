<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subcategory;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Staticpage;
use App\Models\Seo;
use App\Models\Code;
use App\Models\Error;
use App\Models\testimonial;
use App\Models\Supportfaq;
use App\Models\Comment;
use App\Models\Fixissue;
use App\Models\Consultation;
use App\Models\Form;
use App\Models\Founder;
use App\Models\Gallery;
use App\Models\Enquiry;
use Mail;
use App\Mail\Email;
use App\Mail\EnquiryMail;
use Illuminate\Http\RedirectResponse;
use View;
use Carbon\Carbon;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $courselist = Course::get();
        $latestblog = Blog::with('category')->where('status',1)->limit(4)->latest()->get();
        $setting = Setting::first();
        $staticpage = Staticpage::where('status',1)->get();
        $code = Code::first();
       
        view::share(compact('courselist','latestblog','setting','staticpage','code'));
    }

    public function index()
    {
        $faq = Supportfaq::get();
        $testimonial = testimonial::limit(3)-> get();
        $blog = Blog::with('category')->latest()->get();
        $seo = Seo::where('name','home')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/home',compact('blog','faq','testimonial','meta'));
        } else {
            return view('front/home',compact('blog','faq','testimonial'));
        }
        
    }

    public function blog()
    {
        $blog = Blog::latest()->get();
        $recentblog = Blog::latest()->limit(3)->get(); 
        $seo = Seo::where('name','blog')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/blog',compact('blog','meta','recentblog'));
        } else {
            return view('front/blog',compact('blog','recentblog'));
        }
        
    }

    public function blogdetail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        $recentblog = Blog::latest()->limit(5)->get(); 
        if($blog) {
            $meta = [
                'metatitle' => $blog['metatitle'],
                'metakeywords' => $blog['metakeyword'],
                'metadescription' => $blog['metadescription'],
                'image' => $blog['image'],
                'type' => 'blog'
            ];
            return view('front/blogdetail',compact('blog','meta','recentblog'));
        }
    }

    public function contact(){
        $seo = Seo::where('name','contactus')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/contact',compact('meta'));
        }
        return view('front/contact');
    }

    public function testimonial(){
       $testimonial = Testimonial::where("status",1)->where('type',0)->latest()->get();
       $video = Testimonial::where("status",1)->where('type',1)->latest()->get();
       $seo = Seo::where('name','testimonial')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/testimonial',compact('testimonial','meta','video'));
        } else {
            return view('front/testimonial',compact('testimonial','video'));
        }
    
    }

    public function about(){
        $founder = Founder::get();
        $seo = Seo::where('name','aboutus')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/about',compact('meta','founder'));
        } else {
            return view('front/about',compact('founder'));
        }
    }

    public function gallery(){
        $gallery = Gallery::get();
        $seo = Seo::where('name','gallery')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/gallery',compact('meta','gallery'));
        } else {
            return view('front/gallery',compact('gallery'));
        }
    }

    public function booking(){
        $seo = Seo::where('name','booking')->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/booking',compact('meta'));
        } else {
            return view('front/booking');
        }
    }

    public function bookingform($slug){
        $course = Course::where('slug',$slug)->get();
        return view('booking',compact('courese'));
    }
    
    public function coursedetails($slug){
        $course = Course::where('slug',$slug)->where('status',1)->first();
        if($course){
            $meta = [
                'metatitle' => $course['metatitle'],
                'metakeywords' => $course['metakeyword'],
                'metadescription' => $course['metadescription'],
                'image' => $course['image']
            ];
            return view('front/coursedetails',compact('meta','course'));
        } else {
            $page = Staticpage::where('slug',$slug)->where('status',1)->first();
            if($page){
                $meta = [
                    'metatitle' => $page['metatitle'],
                    'metakeywords' => $page['metakeyword'],
                    'metadescription' => $page['metadescription'],
                    'image' => $page['image']
                ];
                return view('front/staticpage',compact('meta','page'));
            } else {
                abort(404);
            }
        }
    }
   
    
    public function contactsubmit(Request $req)
    {
        $data = $req->all();
        $form = new Form();
        $form->name = $req->name;
        $form->email = $req->email;
        $form->country = $req->country_selector_code;
        $form->phone = $req->phone;
        $form->subject = $req->subject;
        $form->comment = $req->message;
        $toEmail = "himanshu01eglobalsoft@gmail.com";
        $ccEmail = "himanshu096singh@gmail.com";
        Mail::to($toEmail)->cc($ccEmail)->send(new Email($req->all()));
        $save = $form->save();
        if($save){
            return back()->with('succcess',"Thanks, Your form has been successfully submitted.",);
        } else {
            return back()->with('error',"Something went wrong, please try again.");
        }
    }
    
    public function sitemap(){
        
        $categories = Category::with(['subcategory'=> function($q){
            $q->where('status','1');
        },'blogs'])->withCount('error')->where('status',1)->get();
        $staticpage = Staticpage::where('status',1)->get();
        $blog = Blog::with(['category:id,slug'])->where('status',1)->select('category_id','name','slug','updated_at')->latest()->get();
        $product = Product::with(['category:id,slug'])->where('status',1)->latest()->get(['category_id','name','slug','updated_at']);
        return response()->view('front.sitemap', compact('categories','staticpage','blog','product'))->header('Content-Type', 'text/xml');
    }
    
    public function enquiry(Request $request)
    {   
        // return $request;
        $toEmail = 'himanshu096singh@gmail.com';
        // $ccEmail = 'himanshu096singh@gmail.com';
        Mail::to($toEmail)->send(new EnquiryMail($request->all()));
        $enquiry               =           new Enquiry;   
        $enquiry->name         =           $request->name;
        $enquiry->email        =           $request->email;
        $enquiry->country      =           $request->country;
        $enquiry->phone        =           $request->phone;
        $enquiry->gender       =           $request->gender;
        $enquiry->room         =           $request->room;
        $enquiry->course       =           $request->course;
        $enquiry->message      =           $request->message;
        $save  = $enquiry->save();
        if($save){
            return true;
        } else {
            return false;
        }
    }
    
    public function consultation(Request $request)
    {
        $toEmail = '';
        $ccEmail = '';
        $request->validate([
                'consultdate'   =>      'required',
                'consulttime'   =>      'required',
                'email'         =>      'required',
                'countrycode'   =>      'required',
                'mobile'        =>      'required',
            ]);
        
        Mail::to($toEmail)->cc($ccEmail)->send(new ConsultationEmail($request->all()));
        $mobile = $request->countrycode.' '.$request->mobile;
        $consult               =           new Consultation;   
        $consult->email        =           $request->email;
        $consult->mobile       =           $mobile;
        $consult->consultdate  =           Carbon::createFromFormat('d-M-Y', $request->consultdate)->format('Y-m-d');
        $consult->consulttime  =           $request->consulttime;
        $consult->ip_address   =           request()->ip();
        $consult->save();
        return 1;
    }
    
    public function search(Request $request)
    {
        $search = $request->search;
        $blog = Blog::with('category')->where('name','LIKE',"%$search%")->orWhere('slug','LIKE',"%$search%")->where('status',1)->get(['name', 'slug', 'category_id']);
        // $product = Product::where('name','LIKE',"%$search%")->orWhere('slug','LIKE',"%$search%")->where('status',1)->get(['name', 'slug']);
        $data = [
                'blog'  => $blog,
                'total' => count($blog),
            ];
        return $data;
    }
    
    /*public function driver()
    {
        $userIp = request()->ip();
        $locationData = \Location::get($userIp);
        dd($locationData);
    }*/
}
