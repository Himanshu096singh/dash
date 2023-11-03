<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Bookingworkshop,Orderworkshop};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BookingWorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Bookingworkshop::with('orders')->latest()->get();
        return view('back.bookingworkshop.index',compact('booking'));
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
        $booking = Bookingworkshop::findOrFail($id);
        return view('back.bookingworkshop.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eid = Crypt::decrypt($id);
        Orderworkshop::where('form_id',$eid)->delete();
        Bookingworkshop::destroy($eid);
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
