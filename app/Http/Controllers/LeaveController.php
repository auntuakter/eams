<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Employee;
use App\Models\Attendance;


class LeaveController extends Controller
{
    public function leave(){
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
            'leave_type'=>$request->leave_type,
            'description'=>$request->description,
            'user_id'=> Auth::user()->id,
            // 'leave_id' => Auth::leave()->id,
            'from'=>$request->from,
            'to'=>$request->to

            
            ]);
            return redirect()->back();
        }
        //Leave Request Update
        
         public function UpdateStatus($leave_id)
        {
          
          $data = Leave::find($leave_id);
        
          $data->update([
          'status'=>request()->status
         ]);

         if(request()->status=='1')
         {
             //insert into attendance table

             $from = strtotime($data->from);
             $to = strtotime($data->to);
         
             while( $from <= $to ) {
         
                 $dates = date('Y-m-d', $from);
                 $from = strtotime("+1 day", $from);

                 Attendance::create([
                    //table field name| input field name
                    'employee_id'=>$data->user_id,
                    'date'=>$dates,
                    'status'=>'leave'
                    
                    
                ]);
             }
         
         }

         
         return redirect()->back();
        }
     
        public function leaveCancel($id){
            // dd($id);
            $leave = Leave::find($id);
            if ($leave) {
                $leave->update([
                    'status'=>'2'
                ]);
                return redirect()->back();
            }
        }
        
}
