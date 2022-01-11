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

        //delete

        public function delete($designation_id)
    {
       designation::find($designation_id)->delete();
       return redirect()->back()->with('success','Designation Deleted.');
    }

     // edit

     public function edit($id)
     {
         
         $designation=Designation::find($id);
 
         return view('pages.designation_update',compact('designation'));
 
     }

     //update

     public function update($id,Request $request)


    {
       
        $designation=Designation::find($id);

        
                    
        $designation->update([
            'designation'=>$request->designation,
             
            
            
        ]);
        return redirect()->back()->with('success','Designation Updated Successfully');
    }
}
