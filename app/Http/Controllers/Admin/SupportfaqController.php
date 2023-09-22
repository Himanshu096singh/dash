<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supportfaq;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
class SupportfaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supportfaq = Supportfaq::latest()->get();
        return view('back.supportfaq.index', compact('supportfaq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.supportfaq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question'  =>  'required',
            'answer'    =>  'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        $questions = $request->question;
        if($questions != null){
            foreach($questions as $key => $question){
                Supportfaq::create([
                    'question'      =>      $question,
                    'answer'        =>      $request->answer[$key]
                ]);
            }
            return redirect()->route('supportfaq.index')->with('success', 'Supportfaq Successfully Added !');
        }else{
            return redirect()->back()->with('error', 'Please add atleast one faq !');
        }
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
        $supportfaq = Supportfaq::findOrFail($id);
        return view('back.supportfaq.edit', compact('supportfaq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $supportfaq = Supportfaq::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'question'  =>  'required|unique:supportfaqs,question,'.$id,
            'answer'    =>  'required'
        ]);

        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        $supportfaq->question       =       $request->question;
        $supportfaq->answer         =       $request->answer;
        $supportfaq->save();
        return redirect()->back()->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Supportfaq::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
}
