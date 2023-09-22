<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class ErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $error = Error::latest()->get();
        return view('back.error.index', compact('error'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('back.error.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          =>          'required|unique:errors',
            'category'      =>          'required',
            'status'        =>          'required',
            'description'   =>          'required'
        ]);
        if($validator->fails()):
            return redirect()->back()
                    ->withErrors($validator)
                        ->withInput();
        endif;

        $error                      =               new Error;
        $error->name                =               $request->name;
        $error->category_id         =               $request->category;
        $error->status              =               $request->status;
        $error->description         =               $request->description;
        $error->save();
        return redirect()->route('error.index')->with('success', 'Successfully Added !');
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
        $error = Error::findOrFail($id);
        $category = Category::all();
        return view('back.error.edit', compact('error', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $error = Error::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'          =>          'required|unique:errors,name,'.$id,
            'category'      =>          'required',
            'status'        =>          'required',
            'description'   =>          'required'
        ]);
        if($validator->fails()):
            return redirect()->back()
                    ->withErrors($validator)
                        ->withInput();
        endif;

        $error->name                =               $request->name;
        $error->category_id         =               $request->category;
        $error->status              =               $request->status;
        $error->description         =               $request->description;
        $error->save();
        return redirect()->back()->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Error::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
    
    public function deletemultiple(Request $request)
    {
        if($request->id != null){
            $ids = $request->id;
            $media = Error::whereIn('id',$ids)->delete();
            return 1;
        }else{
            return response()->json('Plesae select atlease one record');
        }
    }
}
