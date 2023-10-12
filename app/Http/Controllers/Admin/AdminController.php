<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fixissue;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fixissue = Fixissue::all()->count();
        return view('back.home', ['fixissue' => $fixissue]);
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
    public function edit(string $id)
    {
        //
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
        //
    }
    public function accountsetting(){
        return view('back.accountsetting');
    }
    public function passwordupdate(Request $request){
        $request->validate([
            // 'current_password' => 'required|exists:users',
            'current_password' => ['required','string','min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message','Password Updated Successfully');

        }else{

            return redirect()->back()->with('error','Old Password is Incorrect');
        }
    }
}
