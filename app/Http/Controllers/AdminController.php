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
    //    dd($request->all());
    $userpost = $request->except('_token','remember');
    //dd($userpost);
    if (Auth::attempt($userpost)) {
            if(Auth::user()->role=='admin')
            {
                return redirect()->route('admin.dashboard');
            }
            else{
                Auth::logout();
                //cut the dd and add user route here
                
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Loging out.');
    }

}
