<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product,Category,Subcategory,User,Productfaq};
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::latest()->get();
        return view('back.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        $user = User::where('role_id' ,'!=',1)->get();
        return view('back.product.create', compact('category','user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'                  =>    'required|unique:products',
            'slug'                  =>    'required|unique:products',
            'category'              =>    'required',
            'user'                  =>    'required',
            'status'                =>    'required',
            'image'                 =>    'required|mimes:jpeg,png,jpg,webp|max:2048',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'setup'                 =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if($validator->fails()):
            return redirect()->back()->withErrors($validator)->withInput();
        endif;
        if($request->hasFile('image')){
            $file = $request->file('image')->getClientOriginalName();
            $imageExt = $request->file('image')->getClientOriginalExtension();
            $imageName = pathinfo($file,PATHINFO_FILENAME);
            $image = Str::slug(uniqid().$imageName);
            $uploadImage = $image.'.'.$imageExt;
            $imagePath = '/upload/product/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
        }

        $product                    =     new Product;
        $product->category_id       =     $request->category;
        $product->subcategory_id    =     $request->subcategory;
        $product->user_id           =     $request->user;
        $product->name              =     $request->name;
        $product->slug              =     Str::slug($request->slug);
        $product->image             =     $saveImage;
        $product->alt               =     $request->alt;
        $product->status            =     $request->status;
        $product->description       =     $request->description;
        $product->setup             =     $request->setup;
        $product->metatitle         =     $request->metatitle;
        $product->metakeyword       =     $request->metakeyword;
        $product->metadescription   =     $request->metadescription;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Successfully Added');

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
        $product = Product::findOrFail($id);
        $category = Category::all();
        $subcategory = Subcategory::where('category_id', $product->category_id)->get();
        $user = User::where('role_id','!=',1)->get();
        return view('back.product.edit', compact('product','category','subcategory','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $product = Product::find($id);

        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:products,name,'.$id,
            'slug'                  =>    'required|unique:products,slug,'.$id,
            'category'              =>    'required',
            'user'                  =>    'required',
            'status'                =>    'required',
            'alt'                   =>    'required',
            'description'           =>    'required',
            'setup'                 =>    'required',
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
            $imagePath = '/upload/product/';
            $request->image->move(public_path($imagePath), $uploadImage);
            $saveImage = $imagePath.$uploadImage;
            if(File::exists(public_path($product->image))):
                File::delete(public_path($product->image));
            endif;
        }else{
            $saveImage = $product->image;
        }

        $product->category_id       =     $request->category;
        $product->subcategory_id    =     $request->subcategory;
        $product->user_id           =     $request->user;
        $product->name              =     $request->name;
        $product->slug              =     Str::slug($request->slug);
        $product->image             =     $saveImage;
        $product->alt               =     $request->alt;
        $product->status            =     $request->status;
        $product->description       =     $request->description;
        $product->setup             =     $request->setup;
        $product->metatitle         =     $request->metatitle;
        $product->metakeyword       =     $request->metakeyword;
        $product->metadescription   =     $request->metadescription;
        $product->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $product = Product::findOrFail($id);
        if(File::exists(public_path($product->image))):
            File::delete(public_path($product->image));
        endif;
        Product::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');

    }

    public function ajaxrequest(Request $request)
    {
        $id = $request->catId;
        $productId = $request->productid;
        $subCatId = $request->subCatId;
        $subcategory = Subcategory::where('category_id',$id)->get();
        $html = '<option value="">Select Sub Category</option>';
        if(count($subcategory) > 0){
            if($productId == null){
                foreach($subcategory as $key => $item){
                    $html .=  '<option value="'.$item->id.'">'.$item->name.'</option>';
                }
            }else{
                foreach($subcategory as $key => $item){
                    $html .= '<option value="'.$item->id.'" '.(($item->id==$subCatId)?'selected="selected"':"").'>'.$item->name.'</option>';
                }
            }
        }
            return $html;
    }

    public function faqs(Request $request)
    {
        $eid = $request->productId;
        $productId = Crypt::decrypt($eid);
        $questions = $request->question;
        $productfaqs = Productfaq::where('product_id', $productId)->count();
        if($productfaqs > 0):
            Productfaq::where('product_id', $productId)->delete();
        endif;
        if($questions != null):
            foreach($questions as $key => $question){
                Productfaq::create([
                'product_id'    =>  $productId,
                'question'      =>  $question,
                'answer'        =>  $request->answer[$key],
                ]);
            }
            return redirect()->back()->with('success', 'Faqs successfully added !');
        else:
            return redirect()->back()->with('error', 'Please add faqs !');
        endif;
    }
}
