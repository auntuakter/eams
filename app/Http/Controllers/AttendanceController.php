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
        $attendances = Employee::all();
        // dd($attendances->all());
        return view('pages.attendance_check',compact('attendances'));
     }
     public function store(Request $request){
        // dd($request->all());

        Attendance::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'employee_name'=>$request->employee_name,
            'department_name'=>$request->department_name,
            'date'=>$request->date,
            'check_in'=>$request->check_in,
            'check_out'=>$request->check_out
            
            
            ]);
            return redirect()->back();
     }
    //  public function checkin(){
        


    //  }


}
