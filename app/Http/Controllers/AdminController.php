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

            if(Auth::user()->role=='admin'|| Auth::user()->role=='user')
            {
                return redirect()->route('admin.dashboard');
            }
            else{
                Auth::logout();

                return redirect()->back();
                //cut the dd and add user route here

            }
        }
        return redirect()->back()->with('error','invalid credentials.');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login')->with('message','Loging out.');
    }

    public function generatePDF()
    {
        $data=[
            'title' => 'Welcome to my page',
            'date' => date('m/d/Y')
        ];

        $pdf = Admin::loadView('myPDF', $data);

        return $pdf->download('abc.pdf');
    }


}
