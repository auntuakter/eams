<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Leave_typeController extends Controller
{
    public function Leave_type(){
        return view('pages.leave_type');
    }
    public function leave_type_add(){
        return view('pages.leave_type_add');
    }

}
