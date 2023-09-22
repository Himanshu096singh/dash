<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Staticpage;
use App\Models\Seo;
use App\Models\Code;
use App\Models\Error;
use App\Models\Supportfaq;
use App\Models\Comment;
use App\Models\Fixissue;
use App\Models\Consultation;
use Mail;
use App\Mail\Email;
use App\Mail\ConsultationEmail;
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
        $mainCategory = Category::get();
        $latestblog = Blog::with('category')->where('status',1)->limit(4)->latest()->get();
        $categories = Category::where('status',1)->get();
        $setting = Setting::first();
        $staticpage = Staticpage::where('status',1)->get();
        $code = Code::first();
       
        view::share(compact('mainCategory','latestblog','categories','setting','staticpage','code'));
    }

    public function index()
    {
        $blog = Blog::with('category')->latest()->get();
        $product = Product::with('category')->latest()->get();
        $seo = Seo::where('name','home')->where('status',1)->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/home',compact('blog','product','meta'));
        } else {
            return view('front/home',compact('blog','product'));
        }
        
    }
    
    public function support(){
        $supportfaq = Supportfaq::get();
        $seo = Seo::where('name','support')->where('status',1)->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/support',compact('meta','supportfaq'));
        } else {
            return view('front/support',compact('supportfaq'));
        }
    }
    
    public function singlefunction($slug)
    {
        $category = Category::with(['subcategory','faqs','blogs' => function($query) {
                $query->where('status',1)->latest();
            }, 'blogs.user'])->where('slug',$slug)->first();
        if($category) {
            
             $meta = [
                'metatitle' => $category['metatitle'],
                'metakeywords' => $category['metakeyword'],
                'metadescription' => $category['metadescription'],
                'image' => $category['image'],
                'type' => 'category'
            ];
            return view('front/singlebrand',compact('category','meta'));
        } else {
            $page = Staticpage::where('slug',$slug)->where('status',1)->first();
            if($page){
                $meta = [
                    'metatitle' => $page['metatitle'],
                    'metakeywords' => $page['metakeyword'],
                    'metadescription' => $page['metadescription'],
                    'image' => $page['image'],
                    'index'=>'no'
                ];
                return view('front/staticpage',compact('page','meta'));
            } else {
                return abort(404);
            }
            
        }
    }
   
    public function brandserror($slug){
        $category = Category::where('slug',$slug)->where('status',1)->first();
        $brandserror = Category::with(['error'=>function($q){
            $q->where('status',1)->get();
        }])->where('slug',$slug)->where('status',1)->first();
        $seo = Seo::where('name',$category->slug."-errors")->where('status',1)->first();
        if($seo){
            $meta = [
                'metatitle' => $seo['metatitle'],
                'metakeywords' => $seo['metakeyword'],
                'metadescription' => $seo['metadescription'],
                'image' => $seo['image']
            ];
            return view('front/errors',compact('meta','brandserror','category','seo'));
        }
        
        return view('front/errors',compact('brandserror','category','seo'));
    }
    
    public function doublefunction($slug,$slug2){
        $category = Category::where('slug',$slug)->where('status',1)->first();
        if($category){
             $blog = Blog::with(['comment' => function($q){
                 $q->where('status',1)->get();
             },'faqs'])->where('slug',$slug2)->where('status',1)->first();
            if($blog){
                $meta = [
                    'metatitle' => $blog['metatitle'],
                    'metakeywords' => $blog['metakeyword'],
                    'metadescription' => $blog['metadescription'],
                    'image' => $blog['image'],
                    'type' => 'blog'
                    ];
                $prevblog = Blog::with(['category:id,slug'])->where('id', '<' ,$blog->id)->where('status',1)->select('category_id','name','slug')->first();
                $nextblog = Blog::with(['category:id,slug'])->where('id', '>' ,$blog->id)->where('status',1)->select('category_id','name','slug')->first();
                return view('front/blogdetail',compact('category','blog','meta','prevblog','nextblog'));
            } else {
                $product = Product::with('faqs')->where('slug',$slug2)->where('status',1)->first();     
                if($product) {
                    $meta = [
                        'metatitle' => $product['metatitle'],
                        'metakeywords' => $product['metakeyword'],
                        'metadescription' => $product['metadescription'],
                        'image' => $product['image'],
                        'type' => 'product'
                    ];
                    return view('front/productdetail',compact('category','product','meta'));
                } else {
                    $subcategory = Subcategory::with(['faq','blogs','products'])->where('slug',$slug2)->where('status',1)->first();
                    if($subcategory){
                        $meta = [
                            'metatitle' => $subcategory['metatitle'],
                            'metakeywords' => $subcategory['metakeyword'],
                            'metadescription' => $subcategory['metadescription'],
                            'image' => $subcategory['image'],
                            'type' => 'subcategory'
                        ];
                        return view('front/subcategorydetails',compact('subcategory','category','meta'));
                        
                    } else {
                        return abort(404);
                    }
                    
                }
            }
        } else {
            return abort(404);
        }
        
    }
    
    
    public function commentsubmit(Request $req): RedirectResponse
    {
        $validatedData = $req->validate([
            'name' => 'required',
            'email' => 'required|email'
        ], [
            'name.required' => 'Name field is required.',
            'email.required' => 'Email field is required.',
        ]);
        
        if(preg_match('/www\.|http:|https:/i', $req->comment)){
            $msg = [
                    'message' => "Links Not Allowed",
                    'type' => 'error'
                ];
            return redirect()->back()->with('result',$msg);
        }
        $data = $req->all();
        $comment = new Comment();
        
        $comment->blog_id = $req->blogid;
        $comment->name = $req->name;
        $comment->email = $req->email;
        $comment->comment = $req->comment;
        
        $save = $comment->save();
        if($save){
            $msg = [
                    'message' => "Thanks, Your form has been successfully submitted.",
                    'type' => 'success'
                ];
            return back()->with('result',$msg);
        } else {
            $msg = [
                    'message' => "Something went wrong, please try again.",
                    'type' => 'error'
                ];
            return back()->with('result',$msg);
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
    
    public function fixissue(Request $request)
    {
        $toEmail = 'eglobalforms@gmail.com';
        $ccEmail = 'egssfbackup@gmail.com';
        $request->validate([
                'issue'         =>      'required',
                'device'        =>      'required',
                'software'      =>      'required',
                'email'         =>      'required',
                'countrycode'   =>      'required',
                'mobile'        =>      'required',
            ]);
        
        Mail::to($toEmail)->cc($ccEmail)->send(new Email($request->all()));
        $fixissue               =           new Fixissue;   
        $fixissue->issue        =           $request->issue;
        $fixissue->device       =           $request->device;
        $fixissue->os           =           $request->software;
        $fixissue->email        =           $request->email;
        $fixissue->countrycode  =           $request->countrycode;
        $fixissue->mobile       =           $request->mobile;
        $fixissue->ip_address   =           request()->ip();
        $fixissue->save();
        return 1;
    }
    
    public function consultation(Request $request)
    {
        $toEmail = 'eglobalforms@gmail.com';
        $ccEmail = 'egssfbackup@gmail.com';
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
