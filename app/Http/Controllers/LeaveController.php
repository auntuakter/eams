<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Employee;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\LeaveNotification;


class LeaveController extends Controller
{
    public function leave(){
        // return view('pages.leave');
        // dd(auth()->user());
        //Specific user can see his/her leave
        if (auth()->user()->role == "admin") {
            $leaves = Leave::all();
            return view('pages.leave',compact('leaves'));
        }else {
            $leaves = Leave::where('user_id',auth()->user()->id)->get();
            // dd($leaves);
            return view('pages.leave',compact('leaves'));
        }

        
       
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
            'from'=>$request->from,
            'to'=>$request->to

            
            ]);
            return redirect()->route('leaves');
        }
        //Leave Request Update
        
         public function UpdateStatus($leave_id)
        {
          
          $data = Leave::find($leave_id);
        
          $data->update([
          'status'=>request()->status
         ]);

         //Leave Notification
         User::find($data->user_id)->notify(new LeaveNotification());

         //Approve

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

        //cancel leave
     
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


          //Notification Read
        public function notification()
        {
            Auth::user()->unreadnotifications->markAsRead();
            return redirect()->route('leave');
        }
        
}
