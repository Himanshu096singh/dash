<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquiry = Enquiry::latest()->get();
        return view('back.enquiry.index',compact('enquiry'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $eid)
    {
        $id = Crypt::decrypt($eid);
        $enquiry = Enquiry::findOrFail($id);
        return view('back.enquiry.show', compact('enquiry'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Enquiry::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
