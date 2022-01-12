<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sallary;

class SallaryController extends Controller
{
    public function Sallary(){
        //return view('pages.sallary');

        $sallarys = Sallary::all();

        return view('pages.sallary',compact('sallarys'));
    }
    public function  Sallary_add(){
        return view('pages.sallary_add');
    }
    public function store(Request $request){
        // dd($request->all());

        Sallary::create([
            
            'grade'=>$request->grade,
            'basic'=>$request->basic,
            'allowance'=>$request->allowance,
            'total'=>$request->total,
            

            
            ]);
            return redirect()->back();
     }
   
     
    }

