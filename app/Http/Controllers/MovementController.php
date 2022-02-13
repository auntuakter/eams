<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class MovementController extends Controller
{
    public function Movement(){
        $students = Student::all();
        return view('pages.movement',compact('students'));
    }
    public function movement_add(){
        return view('pages.movement_add');
    }
    public function store(Request $request)
    {
        //dd($request->image);
        $request->validate([
            'email'=>'required|unique:students',
        ]);


        $image_name=null;

        if($request->hasFile('image'))
        {

            $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
                //dd($image_name);


            $request->file('image')->storeAs('/students',$image_name);

        }

//dd($request->year.'-'.$request->month.'-'.$request->date);
            Student::create([
            //table field name| input field name
            //  'type'=>$request->type,
            'name'=>$request->fname.' '.$request->lname,
            'email'=>$request->email,
            'date_of_birth'=>$request->year.'-'.$request->month.'-'.$request->date,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'password'=>bcrypt($request->password),
            'image'=>$image_name

            ]);

        return redirect()->back()->with('success','Profile Created Successfully.');
     }

      //delete

      public function delete($student_id)
      {
         student::find($student_id)->delete();
         return redirect()->back()->with('success','Student Deleted.');
      }

      //edit
      public function edit($id)
    {
        $student=Student::find($id);
        $stdName= explode(" ", $student->name);
        //dd($stdName);
        // $stdName = explode('@', $student->email);
       $stdDate= explode("-", $student->date_of_birth);

        return view('pages.student_update',compact('student', 'stdName','stdDate'));

    }


    //update
    public function update($id,Request $request)
    {
        // dd($request->year.'-'.$request->month.'-'.$request->date);
        $student=Student::find($id);

        $image_name=$student->image;

        if($request->hasFile('image'))
        {

            $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

            $request->file('image')->storeAs('/students',$image_name);

        }
        $student->update([
            'name'=>$request->fname.' '.$request->lname,
            'email'=>$request->email,
            'date_of_birth'=>$request->year.'-'.$request->month.'-'.$request->date,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'password'=>bcrypt($request->password),
            'image'=>$image_name
        ]);
        return redirect()->back();
    }





}
