<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function Employee()

    //search
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $employees = Employee::where('name','LIKE','%'.$key.'%')
                // ->orWhere('department','LIKE','%'.$key.'%')
                ->get();
            return view('pages.employee',compact('employees','key'));
        }
        $employees = Employee::all();
        return view('pages.employee',compact('employees','key'));
    }

    
    // {
    //     $employees = Employee::all();
    //     // dd($employees);
    //     return view('pages.employee',compact('employees'));
      
    // }

    public function employee_add(){
        
        return view('pages.employee_add');
       
    }

     public function store(Request $request){
        //dd($request->all());



        //file upload

        $image_name=null;
//              step 1: check image exist in this request.
                 if($request->hasFile('image'))
                 {
                     // step 2: generate file name
                     $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

                     //step 3 : store into project directory

                     $request->file('image')->storeAs('/employees',$image_name);

                 }
        

        // For validation

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'address'=>'required',
            'department'=>'required',
            'gender'=>'required',
            'joined_on'=>'required|date',
            'contact_no'=>'required|min:11|max:11',
            'image'=>''

        ]);

        // dd($request->image);

         Employee::create([
             //table field name| input field name
            //  'type'=>$request->type,
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>$request->password,
             'address'=>$request->address,
             'department'=>$request->department,
             'gender'=>$request->gender,
             'joined_on'=>$request->joined_on,
             'contact_no'=>$request->contact_no,
             'image'=>$image_name,
             ]);
        
        return redirect()->back()->with('success','Profile Created Successfully.');
     }
    
     //view
     public function view($employee_id)
     {
        //  dd($employee_id);
         {

            //        collection= get(), all()====== read with loop (foreach)
            //       object= first(), find(), findOrFail(),======direct
                  $employee=Employee::find($employee_id);
                //   dd($employee);
            //      $product=Product::where('id',$product_id)->first();
                    return view('pages.employee_details', compact('employee'));
                }
     }

     //delete

     public function delete($employee_id)
    {
       employee::find($employee_id)->delete();
       return redirect()->back()->with('success','Employee Deleted.');
    }


    //edit

    public function edit($id)
    {
        
        $employee=Employee::find($id);

        return view('pages.employee_update',compact('employee'));

    }



    //update
    public function update($id,Request $request)


    {
        // dd($id, request()->all());
        $employee=Employee::find($id);

        $image_name=$employee->image;
        //              step 1: check image exist in this request.
                         if($request->hasFile('image'))
                         {
                             // step 2: generate file name
                             $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
        
                             //step 3 : store into project directory
        
                             $request->file('image')->storeAs('/employees',$image_name);
        
                         }
        $employee->update([
            'name'=>$request->name,
             'email'=>$request->email,
             'address'=>$request->address,
             'department'=>$request->department,
             'gender'=>$request->gender,
             'joined_on'=>$request->joined_on,
             'contact_no'=>$request->contact_no,
             'image'=>$image_name,
            
        ]);
        return redirect()->back();
    }
    
    
}
