<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staticpage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class StaticpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staticpage = Staticpage::latest()->get();
        return view('back.staticpage.index', compact('staticpage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.staticpage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:staticpages',
            'slug'                  =>    'required|unique:staticpages',
            'status'                =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if($validator->fails()):
            return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $staticpage                     =           new Staticpage;
        $staticpage->name               =           $request->name;
        $staticpage->slug               =           Str::slug($request->slug);
        $staticpage->status             =           $request->status;
        $staticpage->description        =           $request->description;
        $staticpage->metatitle          =           $request->metatitle;
        $staticpage->metakeyword        =           $request->metakeyword;
        $staticpage->metadescription    =           $request->metadescription;
        $staticpage->save();
        return redirect()->route('staticpage.index')->with('success', 'Successfully Added !');

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
        $staticpage = Staticpage::findOrFail($id);
        return view('back.staticpage.edit', compact('staticpage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $staticpage                 =       Staticpage::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name'                  =>    'required|unique:staticpages,name,'.$id,
            'slug'                  =>    'required|unique:staticpages,slug,'.$id,
            'status'                =>    'required',
            'description'           =>    'required',
            'metatitle'             =>    'required',
            'metakeyword'           =>    'required',
            'metadescription'       =>    'required',
        ]);
        if($validator->fails()):
            return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $staticpage->name               =           $request->name;
        $staticpage->slug               =           Str::slug($request->slug);
        $staticpage->status             =           $request->status;
        $staticpage->description        =           $request->description;
        $staticpage->metatitle          =           $request->metatitle;
        $staticpage->metakeyword        =           $request->metakeyword;
        $staticpage->metadescription    =           $request->metadescription;
        $staticpage->save();
        return redirect()->back()->with('success', 'Successfully Added !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Staticpage::destroy($id);
        return redirect()->back()->with('success', 'Succesfully Deleted !');
    }
}
