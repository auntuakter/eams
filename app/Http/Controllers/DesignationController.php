<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;

class DesignationController extends Controller
{
    public function Designation(){
        $designations = Designation::all();
        // dd($departmentss);
    //    return view('pages.designation');
       return view('pages.designation',compact('designations'));
    }
    public function designation_add(){
        return view('pages.designation_add');
     }
     public function store(Request $request){
        //dd($request->all());

        Designation::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'designation'=>$request->designation
            
            
            ]);
            return redirect()->back();
        }
}
