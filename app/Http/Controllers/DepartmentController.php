<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function Department(){
       $departments = Department::all();
        // dd($departments);
    //    return view('pages.department');
       return view('pages.department',compact('departments'));
    }

    public function department_add(){
        return view('pages.department_add');
     }
     public function store(Request $request){
        //dd($request->all());

        Department::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'department_code'=>$request->department_code,
            'department_name'=>$request->department_name

            ]);
            return redirect()->route('department');
     }


    //  delete
     public function delete($department_id)
    {
       department::find($department_id)->delete();
       return redirect()->back()->with('success','Department Deleted.');
    }


    // edit

    public function edit($id)
    {

        $department=Department::find($id);

        return view('pages.department_update',compact('department'));

    }

    //update
    public function update($id,Request $request)


    {

        $department=Department::find($id);



        $department->update([
            'department_name'=>$request->department_name,
             'department_code'=>$request->department_code,


        ]);
        return redirect()->back()->with('success','Updates Successfully.');
    }









}
