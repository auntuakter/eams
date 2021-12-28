<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{
    public function Leave(){
        // return view('pages.leave');

        $leaves = Leave::all();
        // dd($leaves);
        return view('pages.leave',compact('leaves'));
    }
    public function  Apply_leave(){
        return view('pages.apply_leave');
    }
    public function store(Request $request){
        // dd($request->all());

        Leave::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'employee_name'=>$request->employee_name,
            'department_name'=>$request->department_name,
            'leave_type'=>$request->leave_type,
            'description'=>$request->description,
            'from'=>$request->from,
            'to'=>$request->to

            
            ]);
            return redirect()->back();
     }
   
     
    
}
