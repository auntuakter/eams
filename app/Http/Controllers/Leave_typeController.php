<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave_type;

class Leave_typeController extends Controller
{
    public function Leave_type(){
        $leave_types = Leave_type::all();
        return view('pages.leave_type',compact('leave_types'));
        // return view('pages.leave_type');
    }
    public function leave_type_add(){
        return view('pages.leave_type_add');
    }

    public function store(Request $request){
        //dd($request->all());

        Leave_type::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'leave_type'=>$request->leave_type,
            'day_of_amount'=>$request->day_of_amount,
            'status'=>$request->status,
            'description'=>$request->description,


            ]);
            return redirect()->route('leave_type');
     }

}
