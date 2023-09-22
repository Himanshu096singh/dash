<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Comment::latest()->get();
        return view('back.comment.index', compact('comment'));
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
        $comment = Comment::findOrFail($id);
        return view('back.comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $eid)
    {
        $id = Crypt::decrypt($eid);
        $validator = Validator::make($request->all(), [
            'name'      =>      'required',
            'email'     =>      'required|email',
            'status'    =>      'required'

        ]);
        if($validator->fails()):
            return redirect()->back()->withErrors($validator)->withInput();
        endif;

        $comment = Comment::findOrFail($id);
        $comment->name              =       $request->name;
        $comment->email             =       $request->email;
        $comment->status            =       $request->status;
        $comment->comment           =       $request->comment;
        $comment->save();
        return redirect()->back()->with('success', 'Successfully Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Comment::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
}
