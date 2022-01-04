<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;

class AttendanceController extends Controller
{
    public function Attendance(){
        $attendances = Attendance::all();
        // dd($attendances);
        return view('pages.attendance',compact('attendances'));

    }


    public function attendance_check(){
        // auth()->user()->id;
        
        Attendance::create([
            'employee_id'=>auth()->user()->id,
            'check_in'=>now(),
            

        ]);

        $attendances = Attendance::all();
       
        return view('pages.attendance_check',compact('attendances'));
        // return ('ok');
     }

     
     public function store(Request $request){
        // dd($request->all());

        Attendance::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'employee_id'=>$request->employee_id,
            // 'department_name'=>$request->department_name,
            'date'=>$request->date,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out
            
            
        ]);
        return redirect()->back();
     }
    public function checkin(){

         
        //   return redirect()->back();


    }

    public function checkout(){

       $todayData= Attendance::where('employee_id',auth()->user()->id)->whereDate('created_at',now())->first();

       $todayData->update([
          'check_out'=>now(),
     ]);


        $attendances = Attendance::all();
       
       return view('pages.attendance_check',compact('attendances'));
     }


}




