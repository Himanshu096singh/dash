<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role_id' ,'!=' , 1)->latest()->get();
        return view('back.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      =>      'required',
            'email'     =>      'required|email|unique:users',
            'password'  =>      'required|string|min:8|max:15'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        User::create([
            'name'      =>      $request->name,
            'email'     =>      $request->email,
            'password'  =>      Hash::make($request->password),
        ]);
        return redirect()->route('user.index')->with('success', 'Successfully Added');
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
        $user = User::findOrFail($id);
        return view('back.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'email'         =>      'required|email|unique:users,email,'.$id,
            'name'          =>      'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user->name         =       $request->name;
        $user->email        =       $request->email;
        if($request->password != null):
            $user->password =       $request->password;
        endif;
        $user->save();
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        User::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');

    }
}
