<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fixissue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class FixissueController extends Controller
{
    
    public function index()
    {
        $fixissue = Fixissue::latest()->get();
        return view('back.fixissue.index', compact('fixissue'));
    }

    public function destroy(string $eid)
    {
        $id = Crypt::decrypt($eid);
        Fixissue::destroy($id);
        return redirect()->back()->with('success', 'Successfully Deleted !');
    }
    
    public function deletefixissue(Request $request)
    {
        $ids = $request->deleteAll;
        if($ids != null){
            foreach($ids as $key => $id){
                Fixissue::destroy($id);
            }
            return redirect()->back()->with('success', 'Successfully Deleted !');
        }else{
            return redirect()->back()->with('error', 'Please select atleast one record !');
        }
    }
    
}
