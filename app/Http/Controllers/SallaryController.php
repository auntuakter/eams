<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sallary;

class SallaryController extends Controller
{
    public function Sallary(){


        $sallarys = Sallary::all();
        
       return view('pages.sallary',compact('sallarys'));
    // return view('pages.sallary');
    }
    public function sallary_add(){
        return view('pages.sallary_add');
    }
    public function store(Request $request){
        //dd($request->all());

        
        Sallary::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'grade'=>$request->grade,
            'basic'=>$request->basic,
            'allowance'=>$request->allowance,
            'total'=>$request->basic+$request->allowance,

            
            ]);
            return redirect()->back();
     }
    
   
}
