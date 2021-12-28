<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin(){
        return view('admin');
     }
     public function store(Request $request){
        // dd($request->all());

        $userpost = $request->except('_token','remember');
        //dd($userpost);
        if (Auth::attempt($userpost)) {
            return redirect()->route('admin.dashboard');
        }

        else
        return redirect()->back();

        // Admin::create([
        //     //table field name| input field name
        //    //  'type'=>$request->type,
        //     'username'=>$request->username,
        //     'password'=>$request->password
            
        //     ]);
     }
     public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Loging out.');
    }

}
