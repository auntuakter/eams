<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function Notice(){
        $notices = Notice::all();
        // return view('pages.notice');
        return view('pages.notice',compact('notices'));
    }

    public function notice_add(){
        return view('pages.notice_add');
    }


    public function store(Request $request){
        //dd($request->all());

        Notice::create([
            //table field name| input field name
           //  'type'=>$request->type,
            'date'=>$request->date,
            'holiday'=>$request->holiday,
        
            ]);
            return redirect()->back();
     }

}
