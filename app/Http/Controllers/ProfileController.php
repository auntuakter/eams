<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
        // return view('pages.profile');
$user = User::find(auth()->user()->id);
// dd($user->id);
    $profiles = Employee::with('user')->where('user_id',$user->id)->get();
    // dd($profile);
    return view('pages.profile', compact('profiles'));

    }

    //edit

    public function edit($id)
    {
        
        $profile=Profile::find($id);

        return view('pages.profile_update',compact('profile'));

    }

    //update
    public function update($id,Request $request)
    {
    //  dd($request->all());
        // dd($id);
       
        $profile=Employee::find($id);
    //    dd($profile);

        
        $image_name=$profile->image;
        //              step 1: check image exist in this request.
                         if($request->hasFile('image'))
                         {
                             // step 2: generate file name
                             $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
        
                             //step 3 : store into project directory
        
                             $request->file('image')->storeAs('/employees',$image_name);
        
                         }

        
        $profile->update([
             'name'=>$request->name,
             'address'=>$request->address,
             'gender'=>$request->gender,
             'contact_no'=>$request->contact_no,
             'image'=>$image_name,
        ]);
        $employee = User::where('id',$profile->user_id)->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'gender'=>$request->gender,
            'contact_no'=>$request->contact_no,
            'image'=>$image_name,
        ]);
        return redirect()->back()->with('success','Updates Successfully.');
    }
    


    

}
