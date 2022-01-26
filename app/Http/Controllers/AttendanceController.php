<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;
use App\Models\User;

class AttendanceController extends Controller
{
    public function Attendance(){

        
        $attendances = Attendance::all();
        // dd($attendances);
        return view('pages.attendance',compact('attendances'));

    }


    public function attendance_check(){

        //  dd(auth()->user()->id);
        
        
       $todayData= Attendance::where('employee_id',auth()->user()->id)->whereDate('created_at',now())->first();
       if(empty($todayData))
{
    Attendance::create([
        'employee_id'=>auth()->user()->id,
        'check_in'=>now(),
        'date'=>now()
        

    ]);
    $attendances = Attendance::all();
       
    return view('pages.attendance_check',compact('attendances'));
}
    $attendances = Attendance::all();
       
    return view('pages.attendance_check',compact('attendances'));
    

     }

     
     public function store(Request $request){
        
        //dd($request->all());

        Attendance::create([
            //table field name| input field name
            'employee_id'=>$request->employee_id,
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

       if($todayData->check_out==null)
       {
       $todayData->update([
          'check_out'=>now(),
     ]);


        $attendances = Attendance::all();

       
       return view('pages.attendance_check',compact('attendances'));
       }
       $attendances = Attendance::all();

       
       return view('pages.attendance_check',compact('attendances'));
     }



     //Attendance View
     public function attendance_view(){

        // return view('pages.attendance_view');

        // auth()->user()->id;
        
        
     $todayData= Attendance::where('employee_id',auth()->user()->id)->whereDate('created_at',now())->first();
     if(empty($todayData))
    {

      $attendances = Attendance::all();
       
      return view('pages.attendance_view',compact('attendances'));
 }
      $attendances = Attendance::all();
       
      return view('pages.attendance_view',compact('attendances'));
    

     }


     //attendance report

    public function attendance_report()
    {
        //dd(request()->all());

        if(request()->has('employees'))
        {
            $employees = User::all();
            $attendances = Attendance::where('employee_id',request()->employees)->get();

            return view('pages.attendance_report',compact('attendances','employees'));
        }
        $employees = User::all();
        
        $attendances= null;
        return view('pages.attendance_report',compact('attendances','employees'));
    }


     





}




